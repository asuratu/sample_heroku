<?php

//静态页面

Route::get('/', 'StaticPagesController@home')->name('home');

Route::get('/help', 'StaticPagesController@help')->name('help');

Route::get('/about', 'StaticPagesController@about')->name('about');

//用户

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

//Route::get('/users', 'UsersController@index')->name('users.index');
//Route::get('/users/create', 'UsersController@create')->name('users.create');
//Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//Route::post('/users', 'UsersController@store')->name('users.store');
//Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
//Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
//Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');

//登录

Route::get('login', 'SessionsController@create')->name('login');

Route::post('login', 'SessionsController@store')->name('login');

Route::delete('logout', 'SessionsController@destroy')->name('logout');

//邮件验证

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

//忘记和重置密码

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//微博

Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

//关注列表和粉丝列表

Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');

Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');

//关注用户和取消关注

Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');

Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

