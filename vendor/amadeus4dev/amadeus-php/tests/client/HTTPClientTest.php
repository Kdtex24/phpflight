<?php

declare(strict_types=1);

namespace Amadeus\Tests\Client;

use Amadeus\Client\AccessToken;
use Amadeus\Client\BasicHTTPClient;
use Amadeus\Client\Request;
use Amadeus\Client\Response;
use Amadeus\Configuration;
use Amadeus\Exceptions\AuthenticationException;
use Amadeus\Exceptions\ClientException;
use Amadeus\Exceptions\NetworkException;
use Amadeus\Exceptions\NotFoundException;
use Amadeus\Exceptions\ResponseException;
use Amadeus\Exceptions\ServerException;
use Amadeus\Tests\PHPUnitUtil;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * @covers \Amadeus\Client\BasicHTTPClient
 * @covers \Amadeus\Client\AccessToken
 * @covers \Amadeus\Configuration
 * @covers \Amadeus\Client\Request
 * @covers \Amadeus\Client\Response
 * @covers \Amadeus\Exceptions\ResponseException
 * @covers \Amadeus\Exceptions\ServerException
 * @covers \Amadeus\Exceptions\NotFoundException
 * @covers \Amadeus\Exceptions\AuthenticationException
 * @covers \Amadeus\Exceptions\ClientException
 * @covers \Amadeus\Exceptions\NetworkException
 */
final class HTTPClientTest extends TestCase
{
    private BasicHTTPClient $client;
    private Configuration $configuration;
    private string $path;
    private array $params;
    private string $body;
    private array $info;
    private string $result;
    private AccessToken $accessToken;

    /**
     * @Before
     */
    protected function setUp(): void
    {
        $this->path = "/foo";
        $this->params = array("foo" => "bar");
        $this->body = "{foo: bar}";

        $this->info = array(
            "url" => '/v1/security/oauth2/token',
            "http_code" => 200,
            "header_size" => 39
        );
        $this->result =
            "HTTP/1.1 200 OK"
            ."HeadersKey: HeadersValue"
            ." "
            ."{"
            ."\"data\" : [ {"
            ." \"access_token\" : \"my_token\""
            ." } ]"
            ."}"
        ;

        $this->configuration = new Configuration("client_id", "client_secret");

        $this->client = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->getMock();

        $this->accessToken = new AccessToken($this->client, __DIR__."/cached_token_test.json");

        $this->client->expects($this->any())
            ->method("getAccessToken")
            ->willReturn($this->accessToken);
    }

    /**
     * @throws ResponseException
     */
    public function testGetWithOnlyPath(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->onlyMethods(array('execute', 'getAccessToken'))
            ->getMock();
        $obj->expects($this->any())
            ->method("getAccessToken")
            ->willReturn($this->accessToken);

        $request = new Request(
            "GET",
            $this->path,
            null,
            null,
            $obj->getAccessToken()->getBearerToken(),
            $obj
        );

        $obj->expects($this->once())->method('execute')->with($request);

        $obj->getWithOnlyPath("/foo");
    }

    /**
     * @throws ResponseException
     */
    public function testGetWithParams(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->onlyMethods(array('execute', 'getAccessToken'))
            ->getMock();
        $obj->expects($this->any())
            ->method("getAccessToken")
            ->willReturn($this->accessToken);

        $request = new Request(
            "GET",
            $this->path,
            $this->params,
            null,
            $obj->getAccessToken()->getBearerToken(),
            $obj
        );

        $obj->expects($this->once())->method('execute')->with($request);

        $obj->getWithArrayParams("/foo", $this->params);
    }

    /**
     * @throws ResponseException
     */
    public function testPostWithBody(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->onlyMethods(array('execute', 'getAccessToken'))
            ->getMock();
        $obj->expects($this->any())
            ->method("getAccessToken")
            ->willReturn($this->accessToken);

        $request = new Request(
            "POST",
            $this->path,
            null,
            $this->body,
            $obj->getAccessToken()->getBearerToken(),
            $obj
        );

        $obj->expects($this->once())
            ->method('execute')
            ->with($request);

        $obj->postWithStringBody("/foo", $this->body);
    }

    public function testPost4FetchAccessToken(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->onlyMethods(array('execute'))
            ->getMock();

        $params4FetchAccessToken = array(
            'client_id' => $this->configuration->getClientId(),
            'client_secret' => $this->configuration->getClientSecret(),
            'grant_type' => 'client_credentials'
        );

        $request = new Request(
            "POST",
            '/v1/security/oauth2/token',
            $params4FetchAccessToken,
            null,
            null,
            $obj
        );

        $obj->expects($this->once())
            ->method('execute')
            ->with($request)
            ->willReturn(new Response($request, $this->info, $this->result));

        $obj->getAccessToken()->fetchAccessToken();
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectResponseException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(-1);

        $this->expectException(ResponseException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectServerException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(500);

        $this->expectException(ServerException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectNotFoundException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(404);

        $this->expectException(NotFoundException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectAuthenticationException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(401);

        $this->expectException(AuthenticationException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectClientException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(400);

        $this->expectException(ClientException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectNetworkException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(0);

        $this->expectException(NetworkException::class);
        PHPUnitUtil::callMethod($this->client, 'detectError', array($response));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectCode204NoException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(204);

        $this->assertNull(PHPUnitUtil::callMethod($this->client, 'detectError', array($response)));
    }

    /**
     * @throws ReflectionException
     */
    public function testDetectCode201NoException(): void
    {
        $response = $this->createMock(Response::class);
        $response->expects($this->any())->method("getStatusCode")->willReturn(201);

        $this->assertNull(PHPUnitUtil::callMethod($this->client, 'detectError', array($response)));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetCurlOptionsWithDefault(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->getMock();

        $request = $this->createMock(Request::class);

        $request->expects($this->once())->method('getUri');
        $request->expects($this->once())->method('getHeaders');

        PHPUnitUtil::callMethod($obj, "setCurlOptions", array(curl_init(), $request));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetCurlOptionsWithSsl(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->getMock();

        $request = $this->createMock(Request::class);

        $request->expects($this->any())->method('getSslCertificate')->willReturn($this->path);

        $request->expects($this->exactly(2))->method('getSslCertificate');

        PHPUnitUtil::callMethod($obj, "setCurlOptions", array(curl_init(), $request));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetCurlOptionsWithPostWithBody(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->getMock();

        $request = $this->createMock(Request::class);

        $request->expects($this->any())->method('getVerb')->willReturn("POST");
        $request->expects($this->any())->method('getParams')->willReturn($this->params);
        $request->expects($this->any())->method('getBody')->willReturn($this->body);

        $request->expects($this->once())->method('getVerb');
        $request->expects($this->exactly(2))->method('getBody');
        $request->expects($this->exactly(0))->method('getParams');

        PHPUnitUtil::callMethod($obj, "setCurlOptions", array(curl_init(), $request));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetCurlOptionsWithPostWithParams(): void
    {
        $obj = $this->getMockBuilder(BasicHTTPClient::class)
            ->setConstructorArgs(array($this->configuration))
            ->getMock();

        $request = $this->createMock(Request::class);

        $request->expects($this->any())->method('getVerb')->willReturn("POST");
        $request->expects($this->any())->method('getParams')->willReturn($this->params);
        $request->expects($this->any())->method('getBody')->willReturn(null);

        $request->expects($this->once())->method('getVerb');
        $request->expects($this->exactly(1))->method('getBody');
        $request->expects($this->exactly(2))->method('getParams');

        PHPUnitUtil::callMethod($obj, "setCurlOptions", array(curl_init(), $request));
    }
}
