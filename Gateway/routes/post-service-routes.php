<?php

use App\Http\Controllers\PostServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//API endpoints that require valid token to access
//or authenticated user
Route::middleware('auth:api')->prefix('v1/'.config('gateway.post_prefix'))->group(function(){
    Route::get('/all/{userId}', [PostServiceController::class, "index"]);
    Route::post('/', [PostServiceController::class, "store"]);
    Route::get('/{post}', [PostServiceController::class, "show"]);
    Route::post('/{post}', [PostServiceController::class, "update"]);
    Route::delete('/{post}', [PostServiceController::class, "destroy"]);
});

