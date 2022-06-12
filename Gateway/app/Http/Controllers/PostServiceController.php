<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class PostServiceController extends Controller
{
    //
    use ApiResponser;

    /**
     * The service to consume the post microservice
     * @var PostService
     */
    public $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    /**
     * This method requests and returns terms of service data from shipment API Microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function tracking(Request $request, $trackingId)
    {
        return $this->successResponse($this->shipmentService->tracking($request, $trackingId));
    }
    /**
     * This method requests Shipment API Microservice to decode a VIN Number
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function vinDecode(Request $request, $vin)
    {
        return $this->successResponse($this->shipmentService->vinDecode($request, $vin));
    }
    /**
     * This method requests and returns shipments data of a user from Shipment API Microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function shipments(Request $request)
    {
        return $this->successResponse($this->shipmentService->shipments($request));
    }
    /**
     * This method requests and returns shipment data of a user from Shipment API Microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function shipment(Request $request, $shipmentId)
    {
        return $this->successResponse($this->shipmentService->shipment($request, $shipmentId));
    }
    /**
     * This method requests and returns booking rates Shipment API Microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function bookingRates(Request $request)
    {
        return $this->successResponse($this->shipmentService->bookingRates($request));
    }
    /**
     * This method requests Shipment API Microservice to store new booking data
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doBooking(Request $request)
    {
        return $this->successResponse($this->shipmentService->doBooking($request));
    }
}
