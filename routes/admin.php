<?php

Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
Route::get('dash', 'DashboardController@index');
Route::get('/', 'DashboardController@index');
// ��½
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');


