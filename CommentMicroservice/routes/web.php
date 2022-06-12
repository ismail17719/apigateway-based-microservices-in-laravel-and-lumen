<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('comment/all/user/{userId}', "CommentController@indexUser");
$router->get('comment/all/post/{postId}', "CommentController@indexPost");
$router->post('comment', "CommentController@store");
$router->get('comment/{comment}', "CommentController@show");
$router->post('comment/{comment}', "CommentController@update");
$router->delete('comment/{comment}', "CommentController@destroy");