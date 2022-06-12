<?php

use App\Http\Controllers\CommentServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the api middleware group. Enjoy building your API!
|
*/
//API endpoints that require valid token to be accessed
//or authenticated user
Route::middleware('auth:api')->prefix('v1/'.config('gateway.comment_prefix'))->group(function(){

    Route::get('all/user', [CommentServiceController::class, "indexUser"]);
    Route::get('all/post/{postId}', [CommentServiceController::class, "indexPost"]);
    Route::post('/', [CommentServiceController::class, "store"]);
    Route::get('/{comment}', [CommentServiceController::class, "show"]);
    Route::post('/{comment}', [CommentServiceController::class, "update"]);
    Route::delete('/{comment}', [CommentServiceController::class, "destroy"]);
   
});

