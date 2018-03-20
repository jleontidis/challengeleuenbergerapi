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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix'=>'hockeymatch'],function($router){

    $router->get('/', 'HockeyMatchController@list');

    $router->get('{id}', 'HockeyMatchController@find');

    $router->post('/', 'HockeyMatchController@create');

    $router->put('{id}', 'HockeyMatchController@update');

    $router->delete('{id}', 'HockeyMatchController@delete');
});

$router->group(['prefix'=>'team'],function($router){

    $router->get('/', 'TeamController@list');

    $router->get('{id}', 'TeamController@find');

    $router->post('/', 'TeamController@create');

    $router->put('{id}', 'TeamController@update');

    $router->delete('{id}', 'TeamController@delete');
});

$router->group(['prefix'=>'result'],function($router){

    $router->get('/', 'ResultController@list');

    $router->get('{id}', 'ResultController@find');

    $router->post('/', 'ResultController@create');

    $router->put('{id}', 'ResultController@update');

    $router->delete('{id}', 'ResultController@delete');
});

$router->group(['prefix'=>'admin'],function($router){

    $router->get('/', 'AdminController@list');
});