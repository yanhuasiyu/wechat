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
use Illuminate\Http\Request;

Route::get('/', 'WelcomeController@index')->name('index');

Route::get('tbk', 'WelcomeController@test');

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


Route::get('text', function (Request $request) {
    if ($request->has('q'))
    {
        $msg =  $request->q;

        $str = mb_substr($msg, 0, 1, 'utf-8');
        dump($str) ;
        if ($str == '买')
            return mb_substr($msg,1,mb_strlen($msg),'utf-8');
        else
            return $msg;
    }
    else
        return 'no message.';

});

