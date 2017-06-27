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

Route::get('text', function () {
    $str = mb_substr('1买的规定所发生的', 0, 1, 'utf-8');
    if ($str == '买')
        return 'ok';
    else
        return '不买了';
});
