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


Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);


/*
|--------------------------------------------------------------------------
| Place routes that require authentication here
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function () {
  Route::get('account','Account\AccountController@index');
  Route::get('admin','Admin\AdminController@index');
  // Route::get('admin/directory','Admin\AdminController@directory');
  // Route::get('admin/users','Admin\AdminController@users');
  // Route::get('admin/cms','AdminController@cms');
});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/','PagesController@table');
Route::get('directory','PagesController@table');
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
// Route::get('/table','PagesController@table');

Route::get('sign-in','Auth\AuthController@getLogin');
Route::get('sign-out','Auth\AuthController@getLogout');
Route::get('reset','Auth\PasswordController@getEmail');


/*
|--------------------------------------------------------------------------
| Unused routes
|--------------------------------------------------------------------------
*/
// Authentication registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Authentication password reset routes...
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
