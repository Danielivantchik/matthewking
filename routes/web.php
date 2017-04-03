<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'Admin\DashboardController@index');

    Route::resource('pages', 'Admin\PagesController');
    Route::resource('blog', 'Admin\BlogController');
    Route::resource('schedule', 'Admin\ScheduleController');
    Route::resource('social', 'Admin\SocialMediaController');
});


Route::get('/', 'PagesController@index');
Route::get('/blog', 'PagesController@blog');
Route::get('/blog/{blog}', 'PagesController@blogdetails');
