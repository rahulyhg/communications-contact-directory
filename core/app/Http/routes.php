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

Route::get('/','PagesController@home');
Route::get('/table','PagesController@table');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);

// helper routes for auth
Route::get('sign-in','Auth\AuthController@getLogin');
Route::get('sign-out','Auth\AuthController@getLogout');
Route::get('reset','Auth\PasswordController@getEmail');
