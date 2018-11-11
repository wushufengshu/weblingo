<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@home')->name('user.home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    // Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    // Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    // Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


    // //password reset routes
    // Route::prefix('password')->group(function(){
    // Route::post('/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    // Route::get('/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    // Route::get('/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    // });
    

    // Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');


    Route::resource('user-admin', 'UserAdminController');


    Route::resource('users', 'UsersController');

    Route::resource('course', 'CourseController')->except('show');

    Route::resource('content', 'ContentController')->except('show');
    Route::get('course/{course}', 'ContentController@index')->name('course.show');

    Route::get('/course/{course}/content/create','ContentController@createContent')->name('content.create');
    
    Route::get('/course/{course}/{content}','ContentController@showContent')->name('content.show');
    // Route::prefix('course/{slug}')->group(function(){
    //     Route::resource('/', 'ContentController');
    // });

    
    // Route::get('/category/{slug}', 'SlugController@showSlug')
    //         ->name('category.showSlug')
    //         ->where('slug' ,'[\w\d\_\-]+');

    // Route::get('/{slug}','SlugController@getOne')->name('admin.slug')
    //         ->where('slug' ,'[\w\d\_\-]+');

    
});