<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show');


Route::controllers([

    '' => 'Auth\AuthController' ,
    'password' => 'Auth\PasswordController'
]);



