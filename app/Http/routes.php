<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'site','middleware' => ['web']], function () {

    Route::get('auth/login', 'Site\AuthController@login');
    Route::post('auth/login', 'Site\AuthController@Authenticate');
    Route::get('auth/logout', 'Site\AuthController@logout');
    Route::get('admin/dashboard', 'Site\AuthController@dashboard');
});



Route::group(['prefix' => 'site','middleware' => ['web','auth']], function () {


    Route::get('dashboard', 'Site\AuthController@dashboard');


});

Route::get('site/{slug}', function () {

    return "404 Error";

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
