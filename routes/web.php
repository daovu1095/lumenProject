<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('user','UsersController@index');
$app->get('user/{id}','UsersController@show');
$app->post('user','UsersController@create');
$app->put('user','UsersController@update');
$app->delete('user/{id}','UsersController@delete');
