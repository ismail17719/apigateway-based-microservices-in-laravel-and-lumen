<?php

use App\Http\Controllers\NotificationsServiceController;
use Illuminate\Http\Request;
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
//API endpoints that require valid token to access
//or authenticated user
Route::middleware('auth:api')->prefix('v1/'.config('gateway.comment_prefix'))->group(function(){

    Route::get('comments', [NotificationsServiceController::class,"show"]);
    Route::get('show-by-type/{type}', [NotificationsServiceController::class,"showByType"]);

    Route::post('store', [NotificationsServiceController::class,"store"]);

    Route::patch('mark-read/{id}',  [NotificationsServiceController::class, "markRead"]);

    Route::delete('delete/{id}', [NotificationsServiceController::class,"delete"]);
   
});

