<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Router;

require('app/Controllers/HomeController.php');

/** @var $router Router */

$router->get('/', 'HomeController@welcome');


/*
$router->get('/test', ['name' => 'test', 'uses' => 'HomeController@index']);
$router->get('bye', function () {
    return 'goodbye world!';
});

$router->group(['namespace' => 'App\Controllers', 'prefix' => 'users'], function (Router $router) {
    $router->get('/', ['name' => 'users.index', 'uses' => 'UsersController@index']);
    $router->post('/', ['name' => 'users.store', 'uses' => 'UsersController@store']);
});

// Redirect
$router->get('/menu', function () use ($router) {
    return new RedirectResponse($router->getRoutes()->getByName('home')->uri());
});

// catch-all route
$router->any('{any}', function () {
    return 'four oh four';
})->where('any', '(.*)');*/
