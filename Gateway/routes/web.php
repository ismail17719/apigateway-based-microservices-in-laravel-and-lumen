<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix(config('roro.prefix'))->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::get('dashboard/clients', function (Request $request) {
    
        return view('clients',[
            "clients" => $request->user()->clients
        ]);
    })->middleware(['auth'])->name('dashboard.clients');
});


require __DIR__.'/auth.php';
