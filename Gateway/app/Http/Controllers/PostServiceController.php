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
     * This method requests and returns all posts of a user from post microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return $this->response($this->postService->index($request));
    }
    /**
     * This method requests post microservice to store a new post
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->response($this->postService->store($request));
    }
    /**
     * This method requests and returns post data of a user from post microservice
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $post)
    {
        return $this->response($this->postService->show($request, $post));
    }
    /**
     * This method requests post microservice to update a post
     * @param  \Illuminate\Http\Request
     * @param  Int $postId id of the post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $post)
    {
        return $this->response($this->postService->update($request, $post));
    }
    /**
     * This method requests post microservice to delete a post
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $post)
    {
        return $this->response($this->postService->destroy($request, $post));
    }
    /**
     * This method requests Shipment API Microservice to store new booking data
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doBooking(Request $request)
    {
        return $this->successResponse($this->postService->doBooking($request));
    }
}
