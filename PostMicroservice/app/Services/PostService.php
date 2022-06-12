<?php

namespace App\Services;

use App\Models\Post;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class PostService
{
   use ApiResponser;
   /**
     * Validates store request before it is processed
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function validateStoreRequest($request)
    {
                
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "body" => "required",
            "user_id" => "required",
        ]);
        if($validator->fails())
        {
            return $this->response("Validation failed.", Response::HTTP_UNPROCESSABLE_ENTITY, $validator->errors());
        }
        return false;
    }
   /**
     * Stores a post.
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost($request)
    {
                
        $post = new Post();
        $post->title = $request->title;
        $post->slug = str()->slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status ? $request->status : "publish";
        $post->hearts = $request->hearts ? $request->hearts : 0;
        $post->views = $request->views ? $request->views : 0;
        $post->user_id = $request->user_id;
        if($post->save())
        {
            return $this->response("Post created.", Response::HTTP_CREATED, $post->toArray());
        }
        return  $this->response("Post couldn't be created.", Response::HTTP_SERVICE_UNAVAILABLE);
    }
    /**
     * Validates update request before it is processed
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function validateUpdateRequest($request)
    {
                
        $validator = Validator::make($request->all(), [
            "title" => "required",  
            "body" => "required",
        ]);
        if($validator->fails())
        {
            return $this->response("Validation failed.", Response::HTTP_UNPROCESSABLE_ENTITY, $validator->errors());
        }
        return false;
    }
    /**
     * Updates a post.
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function updatePost($request, $post)
    {
        //
        $post = Post::find($post);
        if( $post )
        {
            $post->title = $request->title;
            $post->slug = str()->slug($request->title);
            $post->body = $request->body;
            $post->status = $request->status ? $request->status : "publish";
            $post->hearts = $request->hearts ? $request->hearts : $post->hearts;
            $post->views = $request->views ? $request->views : $post->views;
            if( $post->save() )
            {
                return $this->response("Post updated.", Response::HTTP_OK, $post->toArray());
            }
            return  $this->response("Post couldn't be updated.", Response::HTTP_SERVICE_UNAVAILABLE);
        }
        return  $this->response("Post doesn't exists.", Response::HTTP_NOT_FOUND);
    }
    
   
}
