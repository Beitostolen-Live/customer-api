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
/*
$router->group(['prefix' => 'api'], function() use ($router) {
    $router->get('customers', [uses => 'CustomerController@showAllCustomers']);
    $router->get('customers/{year}', [uses => 'CustomerController@showAllCustomersOneYear']);
    $router->get('customers/{id}', [uses => 'CustomerController@showOneCustomer']);
    $router->post('customers', [uses => 'CustomerController@create']);
    $router->delete('customers/{id}', [uses => 'CustomerController@delete']);
    $router->put('customers/{id}', [uses => 'CustomerController@update']);
});
*/