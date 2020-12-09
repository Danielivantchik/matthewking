<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/register', function () {
    return redirect('/login');
});
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index');

    Route::resource('pages', 'Admin\PagesController');
    Route::resource('blog', 'Admin\BlogController');
    Route::post('/blog-delete-photo/{id}', 'Admin\BlogController@deletePhoto')->name('blog_delete_photo');

    Route::resource('schedule', 'Admin\ScheduleController');
    Route::post('/schedule-delete-photo/{id}', 'Admin\ScheduleController@deletePhoto')->name('schedule_delete_photo');

    Route::get('social', 'Admin\SocialMediaController@index');
    Route::put('social', 'Admin\SocialMediaController@update')->name('social.update');

    Route::get('invites', 'Admin\InvitationsController@index');
    Route::delete('invites/{id}', 'Admin\InvitationsController@destroy')->name('invitations.destroy');


    Route::get('contact', 'Admin\ContactController@index');
    Route::put('contact', 'Admin\ContactController@update')->name('contact.update');

    Route::get('preach', 'Admin\PreachController@index');
//    Route::put('contact', 'Admin\PreachController@update')->name('contact.update');
});


Route::get('/', 'PagesController@index');
// Route::get('/blog', 'PagesController@blog');
// Route::get('/blog/{blog}', 'PagesController@blogdetails');

Route::get('/invite', 'PagesController@invite')->name('invite');
Route::post('/invite', 'PagesController@storeInvite');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@sendEmail')->name('sendEmail');

Route::get('/preach', 'PagesController@preach')->name('preach');

Route::get('/schedule', 'PagesController@schedule')->name('schedule');
