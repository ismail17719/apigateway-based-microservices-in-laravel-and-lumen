<?php

namespace App\Services;

use App\Models\Comment;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CommentService
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
            "contents" => "required",
            "post_id" => "required",
            "user_id" => "required",
        ]);
        if($validator->fails())
        {
            return $this->response("Validation failed.", Response::HTTP_UNPROCESSABLE_ENTITY, $validator->errors());
        }
        return false;
    }
   /**
     * Stores a Comment.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment($request)
    {
                
        $comment = new Comment();
        $comment->contents = $request->contents;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        if($comment->save())
        {
            return $this->response("Comment created.", Response::HTTP_CREATED, $comment->toArray());
        }
        return  $this->response("Comment couldn't be created.", Response::HTTP_SERVICE_UNAVAILABLE);
    }
    /**
     * Validates update request before it is processed
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function validateUpdateRequest($request)
    {
                
        $validator = Validator::make($request->all(), [
            "contents" => "required",  
        ]);
        if($validator->fails())
        {
            return $this->response("Validation failed.", Response::HTTP_UNPROCESSABLE_ENTITY, $validator->errors());
        }
        return false;
    }
    /**
     * Updates a Comment.
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function updateComment($request, $comment)
    {
        //
        $comment = Comment::find($comment);
        if( $comment )
        {
            $comment->contents = $request->contents;
            if( $comment->save() )
            {
                return $this->response("Comment updated.", Response::HTTP_OK, $comment->toArray());
            }
            return  $this->response("Comment couldn't be updated.", Response::HTTP_SERVICE_UNAVAILABLE);
        }
        return  $this->response("Comment doesn't exists.", Response::HTTP_NOT_FOUND);
    }
}
