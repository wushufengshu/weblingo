<?php

Auth::routes(['verify' => true]);

// Route::get('/quiz/{quiz}', 'HomeController@quiz')->name('user.quiz');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');

    Route::resource('user-admin', 'UserAdminController');

    Route::resource('moderator', 'ModeratorController');

    Route::resource('users', 'UsersController');

    Route::resource('course', 'CourseController')->except('show');

    Route::resource('lesson', 'LessonController')->except('show');

    Route::resource('quiz', 'QuizController');

    Route::resource('reports', 'ReportsController');

    Route::get('quiz/{quiz}/questions/create', 'QuestionController@createQuestions')->name('questions.create');

    Route::post('quiz/{quiz}/questions/create', 'QuestionController@add_questions')->name('questions.add_questions');

    Route::post('quiz/{quiz}/questions/create', 'QuestionController@add_option')->name('questions.add_option');

    // Route::post('quiz/{quiz}/questions/create', 'QuizController@storeQuestions')->name('questions.store');

    Route::resource('video', 'VideoController');

    Route::resource('/careers', 'CareerController');

    Route::resource('/application', 'ApplicationController');

    Route::post('video/{id}', 'VideoController@add')->name('video.add');

    Route::get('quiz/quiz_details', 'QuizController@quiz_details')->name('quiz.quiz_details');

    Route::resource('questions', 'QuestionController')->except(['create']);

    Route::get('course/{course}', 'LessonController@index')->name('course.show');

    Route::post('course/{course}/lesson/create', 'LessonController@add_snippet')->name('lesson.add_snippet');

    Route::get('/course/{course}/lesson/create','LessonController@createLesson')->name('lesson.create');
    
    Route::get('/course/{course}/{lesson}','LessonController@showLesson')->name('lesson.show');

    Route::post('/course/{course}/{lesson}', 'LessonController@storeCode')->name('lesson.storeCode');

    // Route::get('/course/{course}/{lesson}/create','CodeController@showLesson')->name('lesson.show');

    Route::get('course/{course}/{lesson}/create', 'CodeController@create')->name('code.create');

    Route::post('course/{course}/{lesson}/', 'CodeController@store')->name('code.store');

});

Route::prefix('/')->group(function(){

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/quiz/{quiz}', 'HomeController@quiz')->name('user.quiz');

    Route::post('/quiz/{quiz}/result', 'HomeController@quiz_result')->name('user.quiz_result');

    Route::get('/video/{video}', 'HomeController@video')->name('user.video');

    Route::get('/video/{video}/episode/{id}', 'HomeController@media')->name('user.media');

    Route::post('/video/{video}/episode/{id}/comment', 'CommentsController@store')->name('comment.store');

    Route::get('/{course}/{lesson}', 'HomeController@course')->name('user.course');

    Route::get('{course}/{lesson}/code_preview/{code_preview}', 'HomeController@code_preview')->name('user.code_preview');

    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

    Route::get('/aboutus', 'HomeController@aboutus')->name('user.aboutus');

    Route::get('/careers', 'HomeController@careers')->name('user.careers');

    Route::get('/careers/showCareer/{id}', 'HomeController@showCareer')->name('user.showCareer');

    Route::get('/acknowledgement', 'HomeController@acknowledgement')->name('user.acknowledgement');

    Route::get('/termsandcondition', 'HomeController@terms')->name('user.terms');

    Route::post('/careers', 'HomeController@upload')->name('application.upload');

    Route::get('/show/{id}', 'HomeController@showPDF')->name('application.showPDF');

});
// test title
// select lesspon