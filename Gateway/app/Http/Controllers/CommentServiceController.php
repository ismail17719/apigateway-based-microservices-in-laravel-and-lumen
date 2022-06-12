<?php

namespace App\Http\Controllers;

use App\Services\CommentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class CommentServiceController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the comment microservice
     * @var CommentService
     */
    public $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    /**
     * Get all comments posted by a user
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexUser(Request $request)
    {
        return $this->response($this->commentService->indexUser($request));
    }
    /**
     * Get all comments for a post
     * @param  \Illuminate\Http\Request
     * @param  $postId int id of the post
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexPost(Request $request, $postId)
    {
        return $this->response($this->commentService->indexPost($request, $postId));
    }
    /**
     * Get all notifications for a specific user within a specific date range
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAll(Request $request)
    {
        return $this->response($this->commentService->showAll($request));
    }
    
    /**
     * Get a specific comment identified by the id
     * @param  \Illuminate\Http\Request
     * @param  $comment int id of the comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $comment)
    {
        return $this->response($this->commentService->show($request, $comment));
    }
    
    /**
     * Stores a comment in database
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->response($this->commentService->store($request));
    }
    /**
     * Updates a comment
     * @param  \Illuminate\Http\Request
     * @param  Int $comment id of the comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $comment)
    {
        return $this->response($this->commentService->update($request, $comment));
    }
    
    /**
     * Deletes a comment from database
     * @param  \Illuminate\Http\Request
     * @param  $id int id of the comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $comment)
    {
        return $this->response($this->commentService->destroy($request, $comment));
    }
    
}
