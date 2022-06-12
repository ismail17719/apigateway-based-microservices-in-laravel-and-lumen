<?php

use App\Http\Controllers\Oauth\AccessTokenController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->prefix('v1')->group(function(){
    //Route for checking if the user is logged in
    Route::get('/auth-test', function (Request $request) {
        return "User Authenticated";
    });
});

Route::prefix('v1')->group(function(){
    Route::post('token', [AccessTokenController::class,'issueToken']);
});

