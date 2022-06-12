<?php

use App\Http\Controllers\AddressBookServiceController;
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
//API endpoints that require valid token to access
//or authenticated user
Route::middleware('auth:api')->prefix('v1/'.config('gateway.post_prefix'))->group(function(){

    Route::get('/all', [AddressBookServiceController::class, "all"]);
    Route::get('/show-all', [AddressBookServiceController::class, "showAll"]);
    Route::get('/show/{id}', [AddressBookServiceController::class, "show"]);
    Route::post('/search', [AddressBookServiceController::class, "search"]);
    Route::post('/store', [AddressBookServiceController::class, "store"]);
    Route::patch('/update', [AddressBookServiceController::class, "update"]);
    Route::delete('/delete/{id}', [AddressBookServiceController::class, "delete"]);
});

