<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('index');

Route::group(['prefix' => 'wechat'], function () {
    Route::any('/', 'WechatController@serve');
    Route::group(['namespace' => 'Wechat', 'middleware' => 'auth'], function () {
        Route::get('user', 'UserController@index');
        Route::get('user/{id}', 'UserController@show');
        Route::resource('menu', 'MenuController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');


