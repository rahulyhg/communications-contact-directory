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
Route::group(['middleware' => ['auth', 'onlyenabledusers']], function () {
  // home page aliases
  Route::get('/',['as'=>'home', 'uses'=>'PagesController@table']);
  Route::get('table',['as'=>'table', 'uses'=>'PagesController@table']);
  Route::get('directory',['as'=>'directory', 'uses'=>'PagesController@table']);

  Route::get('modal/{id}',['as'=>'modal', 'uses'=>'PagesController@modal']);
  Route::get('contact',['as'=>'contact', 'uses'=>'PagesController@contact']);
  Route::post('storeContact',['as'=>'storeContact', 'uses'=>'PagesController@storeContact']);
  Route::get('about',['as'=>'about', 'uses'=>'PagesController@about']);
});


/*
|--------------------------------------------------------------------------
| Place routes that require admin status here
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'onlyenabledusers', 'onlyallowadmins']], function () {
  Route::get('account',['as'=>'account', 'uses'=>'Account\AccountController@index']);

  Route::get('admin',['as'=>'admin', 'uses'=>'Admin\DashboardController@index']);

  Route::get('admin/directory/excel',['as'=>'admin.directory.excel', 'uses'=>'Admin\DirectoryController@excel']);
  Route::resource('admin/directory','Admin\DirectoryController');
  Route::resource('admin/department','Admin\DepartmentController');
  Route::resource('admin/location','Admin\LocationController');
  Route::resource('admin/tag','Admin\TagController');
  Route::resource('admin/cms','Admin\CmsController');
  Route::resource('admin/message','Admin\MessageController');
  Route::resource('admin/users','Admin\UsersController');
});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
// Route::get('/splash',['as'=>'splash', 'uses'=>'PagesController@splash']);
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
