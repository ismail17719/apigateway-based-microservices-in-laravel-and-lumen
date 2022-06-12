<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Services\CommentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    use ApiResponser;
   /**
     * Display a listing of the resource for a user.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function indexUser($userId)
    {
        //
        return $this->response("All Comments of user {$userId}", 
        Response::HTTP_OK, 
        Comment::where("user_id", $userId)->get()->toArray());
    }
   /**
     * Display a listing of the resource for a post.
     * @param  int  $postId
     * @return \Illuminate\Http\Response
     */
    public function indexPost($postId)
    {
        //
        return $this->response("All Comments of user {$postId}", 
        Response::HTTP_OK, 
        Comment::where("post_id", $postId)->get()->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($comment)
    {
        //
        $comment = Comment::find($comment);
        if($comment)
        {
            return $this->response("Comment found.", Response::HTTP_OK, $comment->toArray());
        }
        return  $this->response("Comment not found.", Response::HTTP_NOT_FOUND);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate request
        $response = (new CommentService())->validateStoreRequest($request);
        if( $response )
        {
            return $response;
        }
        
        //Tell the service to do the job
        return (new CommentService())->storeComment($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  Int  $Comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comment)
    {
        //Validate request
        $response = (new CommentService())->validateUpdateRequest($request);
        if( $response )
        {
            return $response;
        }
        //Tell the service to do the job
        return (new CommentService())->updateComment($request, $comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($comment)
    {
        //
       try{
            $comment = Comment::find($comment);
            if($comment)
            {
                if($comment->delete())
                {
                    return $this->response("Comment deleted.", Response::HTTP_OK, $comment->toArray());
                }
                return  $this->response("Comment couldn't be deleted.", Response::HTTP_SERVICE_UNAVAILABLE);
            }
            return  $this->response("Comment doesn't exist.", Response::HTTP_NOT_FOUND);
           
       }
       catch(\Throwable $th)
       {
            return $this->response($th->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
       }
        
    }
}
