<?php
// declare(strict_types=1);
header("content-Type: application/json");
use Amadeus\Amadeus;
use Amadeus\Exceptions\ResponseException;

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


if($_SERVER['REQUEST_METHOD'] !== "GET"){
    header("statusCode: 404");
    echo "404 page not found";
}

try {

    $data = json_decode(file_get_contents("php://input"),true);
    $amadeus = Amadeus
    ::builder($_ENV['AMADEUS_APIKEY'], $_ENV['AMADEUS_SECRETKEY'])
    ->build();

    // $flightOffers = $amadeus->getShopping()->getFlightOffers()->get($data);

    $hotelOffers = $amadeus->getShopping()->getHotelOffers()->get($data);

    // $hotelOffers->$data->json_decode($data);
    // echo json_encode . <br>;

    echo json_encode($hotelOffers[0]->getResponse()->getBodyAsJsonObject());



} catch (\Throwable $th) {
    //throw $th;

    print $th;
}


