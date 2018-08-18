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
    return "
    USERS: 
    <br>
    GET ----- /api/users  <br>
    POST ---- /api/users <br>
    PUT ----- /api/users/{id} <br>
    DELETE -- /api/users/{id} <br>
    <br><br>
    
    PROPERTIES:
    <br>
    GET ----- /api/properties  <br>
    POST ---- /api/properties <br>
    PUT ----- /api/properties/{id} <br>
    DELETE -- /api/properties/{id} <br>
    <br><br>
    
    BOOKINGS:
    <br>
    GET ----- /api/bookings  <br>
    POST ---- /api/bookings <br>
    PUT ----- /api/bookings/{id} <br>
    DELETE -- /api/bookings/{id} <br>
    
    
    
    ";
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('users', 'UserController@getUsers');

    $router->get('users/{id}','UserController@getUser');

    $router->post('users', 'UserController@create');

    $router->delete('users/{id}','UserController@delete');

    $router->put('users/{id}', 'UserController@update');


    $router->get('properties', 'PropertieController@getProperties');

    $router->get('properties/{id}','PropertieController@getPropertie');

    $router->post('properties', 'PropertieController@create');

    $router->delete('properties/{id}','PropertieController@delete');

    $router->put('properties/{id}', 'PropertieController@update');


    $router->get('bookings', 'BookingController@getBookings');

    $router->get('bookings/{id}','BookingController@getBooking');

    $router->post('bookings', 'BookingController@create');

    $router->delete('bookings/{id}','BookingController@delete');

    $router->put('bookings/{id}', 'BookingController@update');
});