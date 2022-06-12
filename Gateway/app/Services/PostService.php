<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class PostService
{
    use ConsumeExternalService;

    /**
     * The base uri to consume authors service
     * @var string
     */
    public $baseUri;

    /**
     * Authorization secret to pass to author api
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.shipment.base_uri');
        $this->secret = config('services.shipment.secret');
    }


    /**
     * Requests shipment tracking data from Shipment Api Microservice
     */
    public function tracking($request, $trackingId)
    {
        return $this->performRequest('GET', '/tracking/'.$trackingId, $request->all(), $request->headers->all());
    }
    /**
     * Requests Shipment Api Microservice to decode a VIN Number
     */
    public function vinDecode($request, $vin)
    {
        return $this->performRequest('GET', '/vin-decode/'.$vin, $request->all(), $request->headers->all());
    }
    /**
     * Requests Shipment Api Microservice to provide shipments data
     */
    public function shipments($request)
    {
        //Get the correct id of the user
        $userId = GatewayService::getUserId($request);
        return $this->performRequest('GET', '/shipments/'.$userId, $request->all(), $request->headers->all());
    }
    /**
     * Requests Shipment Api Microservice to provide a shipment data
     */
    public function shipment($request, $shipmentId)
    {
        //Get the correct id of the user
        $userId = GatewayService::getUserId($request);
        return $this->performRequest('GET', '/shipment/'.$shipmentId."/".$userId, $request->all(), $request->headers->all());
    }
    /**
     * Requests Shipment Api Microservice to provide booking rates
     */
    public function bookingRates($request)
    {
        //Get the correct id of the user
        // $userId = GatewayService::getUserId($request);
        return $this->performRequest('POST', '/booking-rates', $request->all(), $request->headers->all());
    }
    /**
     * Requests Shipment Api Microservice to store new booking
     */
    public function doBooking($request)
    {
        //Get the correct id of the user
        $userId = GatewayService::getUserId($request);
        return $this->performRequest('POST', '/do-booking', array_merge($request->all(), ['user_id' => $userId]), $request->headers->all());
    }
    
}