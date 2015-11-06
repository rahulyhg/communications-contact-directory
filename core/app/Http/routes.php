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
  Route::get('account',['as'=>'account', 'uses'=>'Account\AccountController@index']);

  Route::get('admin',['as'=>'admin', 'uses'=>'Admin\DashboardController@index']);
  Route::get('admin/users','Admin\UsersController@index');
  Route::post('admin/users',['as'=>'store_users', 'uses'=>'Admin\UsersController@store']);
  Route::get('admin/users/create',['as'=>'create_user', 'uses'=>'Admin\UsersController@create']);
  Route::get('admin/users/{id}','Admin\UsersController@edit');
  Route::get('admin/directory','Admin\DirectoryController@index');
  Route::get('admin/cms','Admin\CmsController@index');

});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/',['as'=>'home', 'uses'=>'PagesController@table']);
Route::get('directory',['as'=>'directory', 'uses'=>'PagesController@table']);
Route::get('contact',['as'=>'contact', 'uses'=>'PagesController@contact']);
Route::get('about',['as'=>'about', 'uses'=>'PagesController@about']);

Route::get('sign-in',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::get('sign-out',['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);
Route::get('reset',['as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail']);


/*
|--------------------------------------------------------------------------
| Unused routes
|--------------------------------------------------------------------------
*/
// Authentication registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Authentication password reset routes...
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
