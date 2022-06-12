<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Services\PostService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    use ApiResponser;
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        //
        return $this->response("All posts of user {$userId}", 
        Response::HTTP_OK, 
        Post::where("user_id", $userId)->get()->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //
        $post = Post::find($post);
        if($post)
        {
            return $this->response("Post found.", Response::HTTP_OK, $post->toArray());
        }
        return  $this->response("Post not found.", Response::HTTP_NOT_FOUND);
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
        $response = (new PostService())->validateStoreRequest($request);
        if( $response )
        {
            return $response;
        }
        
        //Tell the service to do the job
        return (new PostService())->storePost($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  Int  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        //Validate request
        $response = (new PostService())->validateUpdateRequest($request);
        if( $response )
        {
            return $response;
        }
        //Tell the service to do the job
        return (new PostService())->updatePost($request, $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //
       try{
            $post = Post::find($post);
            if($post)
            {
                if($post->delete())
                {
                    return $this->response("Post deleted.", Response::HTTP_OK, $post->toArray());
                }
                return  $this->response("Post couldn't be deleted.", Response::HTTP_SERVICE_UNAVAILABLE);
            }
            return  $this->response("Post doesn't exist.", Response::HTTP_NOT_FOUND);
           
       }
       catch(\Throwable $th)
       {
            return $this->response($th->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
       }
        
    }
}
