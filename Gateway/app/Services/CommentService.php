<?php

namespace App\Services;

use App\Traits\ConsumeMicroserviceService;

class CommentService
{
    use ConsumeMicroserviceService;

    /**
     * The base uri to consume comment microservice
     * @var string
     */
    public $baseUri;

    /**
     * Authorization secret to pass to comment microservice
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.comment.base_uri');
        $this->secret = config('services.comment.secret');
    }

    /**
     * Requests comment microservice to give all comments posted by a user
     */
    public function indexUser($request)
    {
        return $this->performRequest('GET', '/comment/all/user/'.$request->user()->id, $request->all(), $request->headers->all());
    }
    /**
     * Requests comment microservice to give all comments for a post
     */
    public function indexPost($request, $postId)
    {
        return $this->performRequest('GET', '/comment/all/post/'.$postId, $request->all(), $request->headers->all());
    }
    
    /**
     * Requests comment microservice to get a particular comment
     */
    public function show($request, $comment)
    {
        return $this->performRequest('GET', '/comment/'.$comment, $request->all(), $request->headers->all());
    }
    
    
    /**
     * Requests comment microservice to store a comment
     */
    public function store($request)
    {
        return $this->performRequest('POST', '/comment', array_merge($request->all(), ['user_id' => $request->user()->id]), $request->headers->all());
    }
    
    /**
     * Requests comment microservice to update a comment
     */
    public function update($request, $comment)
    {
        return $this->performRequest('POST', '/comment/'.$comment ,$request->all(), $request->headers->all());
    }
    /**
     * Requests  comment icroservice to delete a comment
     */
    public function destroy($request, $comment)
    {
        return $this->performRequest('DELETE', '/comment/'.$comment,$request->all(), $request->headers->all());
    }
    
}