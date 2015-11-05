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
  Route::get('account', array('as'=>'account', 'uses'=>'Account\AccountController@index'));

  Route::get('admin', array('as'=>'admin', 'uses'=>'Admin\DashboardController@index'));

  Route::get('admin/users','Admin\UsersController@index');
  Route::get('admin/users/create','Admin\UsersController@create');
  Route::get('admin/users/{id}','Admin\UsersController@edit');

  Route::get('admin/directory','Admin\DirectoryController@index');
  Route::get('admin/cms','Admin\CmsController@index');
});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/', array('as'=>'home', 'uses'=>'PagesController@table'));
Route::get('directory',array('as'=>'directory', 'uses'=>'PagesController@table'));
Route::get('contact',array('as'=>'contact', 'uses'=>'PagesController@contact'));
Route::get('about',array('as'=>'about', 'uses'=>'PagesController@about'));
// Route::get('/table',array('as'=>'table', 'uses'=>'PagesController@table'));

Route::get('sign-in',array('as'=>'login', 'uses'=>'Auth\AuthController@getLogin'));
Route::get('sign-out',array('as'=>'logout', 'uses'=>'Auth\AuthController@getLogout'));
Route::get('reset',array('as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail'));


/*
|--------------------------------------------------------------------------
| Unused routes
|--------------------------------------------------------------------------
*/
// Authentication registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Authentication password reset routes...
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
