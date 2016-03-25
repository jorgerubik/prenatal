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

/*
|--------------------------------------------------------------------------
| Routes Log
|--------------------------------------------------------------------------
*/
Route::get('/', ['middleware'=>'logUser', function () {
    return view('users.login');
}]);
Route::resource('log','LogController');
Route::get('logout','LogController@logout');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');
/*
|--------------------------------------------------------------------------
| Routes System
|--------------------------------------------------------------------------
*/
Route::resource('index','FrontController');