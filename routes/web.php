<?php

Auth::routes(['verify' => true]);

Route::prefix('/')->group(function(){
    // Route::get('', 'HomeController@index')->name('home');

    Route::get('/', 'HomeController@home')->name('home')->middleware('verified');

    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

    Route::get('/{course}', 'CourseController');
});

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');

    Route::resource('user-admin', 'UserAdminController');

    Route::resource('users', 'UsersController');

    Route::resource('course', 'CourseController')->except('show');

    Route::resource('lesson', 'LessonController')->except('show');

    Route::resource('quiz', 'QuizController');

    Route::get('quiz/quiz_details', 'QuizController@quiz_details')->name('quiz.quiz_details');

    Route::resource('questions', 'QuestionController');

    Route::get('course/{course}', 'LessonController@index')->name('course.show');

    Route::post('course/{course}/lesson/create', 'LessonController@add_snippet')->name('lesson.add_snippet');

    Route::get('/course/{course}/lesson/create','LessonController@createLesson')->name('lesson.create');
    
    Route::get('/course/{course}/{lesson}','LessonController@showLesson')->name('lesson.show');
});