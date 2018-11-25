<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@home')->name('user.home')->middleware('verified');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');

    Route::resource('user-admin', 'UserAdminController');

    Route::resource('users', 'UsersController');

    Route::resource('course', 'CourseController')->except('show');

    Route::resource('content', 'ContentController')->except('show');

    Route::resource('questions', 'QuestionController');

    Route::get('course/{course}', 'ContentController@index')->name('course.show');

    Route::post('course/{course}/content/create', 'ContentController@add_snippet')->name('content.add_snippet');

    Route::get('/course/{course}/content/create','ContentController@createContent')->name('content.create');
    
    Route::get('/course/{course}/{content}','ContentController@showContent')->name('content.show');

    


});