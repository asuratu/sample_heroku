<?php

//静态页面

Route::get('/', 'StaticPagesController@home')->name('home');

Route::get('/help', 'StaticPagesController@help')->name('help');

Route::get('/about', 'StaticPagesController@about')->name('about');

//注册

Route::get('signup', 'UsersController@create')->name('signup');

