<?php

namespace App\Services;


use App\Traits\ConsumeMicroserviceService;

class PostService
{
    use ConsumeMicroserviceService;

    /**
     * The base uri to consume post microservice
     * @var string
     */
    public $baseUri;

    /**
     * Authorization secret to pass to post microservice
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.post.base_uri');
        $this->secret = config('services.post.secret');
    }


    /**
     * Requests all posts of a user  from post microservice
     */
    public function index($request)
    {
        return $this->performRequest('GET', '/post/all/'.$request->user()->id , $request->all(), $request->headers->all());
    }
    /**
     * Requests post microservice to store a new post
     */
    public function store($request)
    {
        return $this->performRequest('POST', '/post', array_merge($request->all(), ['user_id' => $request->user()->id ]), $request->headers->all());
    }
    /**
     * Requests post microservice to provide posts data
     */
    public function show($request, $post)
    {
        return $this->performRequest('GET', '/post/'.$post, $request->all(), $request->headers->all());
    }
    /**
     * Requests post microservice to update a post
     */
    public function update($request, $post)
    {
        return $this->performRequest('POST', '/post/'.$post, $request->all(), $request->headers->all());
    }
    /**
     * Requests post microservice to delete a post
     */
    public function destroy($request, $post)
    {
        return $this->performRequest('DELETE', '/post/'.$post, $request->all(), $request->headers->all());
    }
    
}