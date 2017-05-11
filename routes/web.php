<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'Admin\DashboardController@index');

    Route::resource('pages', 'Admin\PagesController');
    Route::resource('blog', 'Admin\BlogController');
    Route::post('/delete-photo/{id}', 'Admin\BlogController@deletePhoto')->name('blog_delete_photo');
    Route::resource('schedule', 'Admin\ScheduleController');
    Route::resource('social', 'Admin\SocialMediaController');

    Route::get('invites', 'Admin\InvitationsController@index');
    Route::delete('invites/{id}', 'Admin\InvitationsController@destroy')->name('invitations.destroy');
});


Route::get('/', 'PagesController@index');
Route::get('/blog', 'PagesController@blog');
Route::get('/blog/{blog}', 'PagesController@blogdetails');

Route::get('/invite', 'PagesController@invite')->name('invite');
Route::post('/invite', 'PagesController@storeInvite');
