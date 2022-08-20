<?php

declare(strict_types=1);

namespace Amadeus\EReputation;

use Amadeus\Amadeus;
use Amadeus\Exceptions\ResponseException;
use Amadeus\Resources\HotelSentiment;
use Amadeus\Resources\Resource;

/**
 * A namespaced client for the
 * "/v2/e-reputation/hotel-sentiments" endpoints.
 *
 * Access via the Amadeus client object.
 *
 *      $amadeus = Amadeus::builder("clientId", "secret")->build();
 *      $amadeus->getEReputation()->getHotelSentiments();
 *
 */
class HotelSentiments
{
    private Amadeus $amadeus;

    /**
     * Constructor
     * @param Amadeus $amadeus
     */
    public function __construct(Amadeus $amadeus)
    {
        $this->amadeus = $amadeus;
    }

    /**
     * Hotel Ratings API:
     *
     * Get hotel sentiments by Amadeus Hotel Ids.
     *
     *      $amadeus->getEReputation()->getHotelSentiments()->get(["hotelIds" => "TELONMFS"]);
     *
     * @link https://developers.amadeus.com/self-service/category/hotel/api-doc/hotel-ratings/api-reference
     *
     * @param   array $params       the parameters to send to the API
     * @return  HotelSentiment[]    an API resource
     * @throws  ResponseException   when an exception occurs
     */
    public function get(array $params): array
    {
        $response = $this->amadeus->getClient()->getWithArrayParams(
            '/v2/e-reputation/hotel-sentiments',
            $params
        );

        return Resource::fromArray($response, HotelSentiment::class);
    }
}
