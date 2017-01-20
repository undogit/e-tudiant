<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Middleware exemple*/
Route::get('test', [
    'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
    'uses' => 'TestController@index',
    'roles' => ['formateur',] // Only an administrator, or a manager can access this route
]);

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index');

// Quizz
Route::get('quizz', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@index','roles' => ['formateur', 'admin']])->name('quizz.index');
Route::post('quizz', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@store','roles' => ['formateur', 'admin']])->name('quizz.store');
Route::get('quizz/create', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@create','roles' => ['formateur', 'admin']])->name('quizz.create');
Route::get('quizz/{quizz}', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@show','roles' => ['formateur', 'admin']])->name('quizz.show');
Route::put('quizz/{quizz}', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@update','roles' => ['formateur', 'admin']])->name('quizz.update');
Route::delete('quizz/{quizz}', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@destroy','roles' => ['formateur', 'admin']])->name('quizz.destroy');
Route::get('quizz/{quizz}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'QuizzController@edit','roles' => ['formateur', 'admin']])->name('quizz.edit');

// Group
Route::get('group', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@index','roles' => ['formateur', 'admin']])->name('group.index');
Route::post('group', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@store','roles' => ['formateur', 'admin']])->name('group.store');
Route::get('group/create', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@create','roles' => ['formateur', 'admin']])->name('group.create');
Route::get('group/{group}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@show','roles' => ['formateur', 'admin']])->name('group.show');
Route::put('group/{group}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@update','roles' => ['formateur', 'admin']])->name('group.update');
Route::delete('group/{group}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@destroy','roles' => ['formateur', 'admin']])->name('group.destroy');
Route::get('group/{group}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'GroupController@edit','roles' => ['formateur', 'admin']])->name('group.edit');

// GroupUser
Route::get('groupuser', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@index','roles' => ['formateur', 'admin']])->name('groupuser.index');
Route::post('groupuser', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@store','roles' => ['formateur', 'admin']])->name('groupuser.store');
Route::get('groupuser/create', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@create','roles' => ['formateur', 'admin']])->name('groupuser.create');
Route::get('groupuser/{groupuser}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@show','roles' => ['formateur', 'admin']])->name('groupuser.show');
Route::put('groupuser/{groupuser}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@update','roles' => ['formateur', 'admin']])->name('groupuser.update');
Route::delete('groupuser/{groupuser}', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@destroy','roles' => ['formateur', 'admin']])->name('groupuser.destroy');
Route::get('groupuser/{groupuser}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'GroupUserController@edit','roles' => ['formateur', 'admin']])->name('groupuser.edit');

// Question
Route::get('question', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@index','roles' => ['formateur', 'admin']])->name('question.index');
Route::post('question', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@store','roles' => ['formateur', 'admin']])->name('question.store');
Route::get('question/create', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@create','roles' => ['formateur', 'admin']])->name('question.create');
Route::get('question/{question}', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@show','roles' => ['formateur', 'admin']])->name('question.show');
Route::put('question/{question}', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@update','roles' => ['formateur', 'admin']])->name('question.update');
Route::delete('question/{question}', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@destroy','roles' => ['formateur', 'admin']])->name('question.destroy');
Route::get('question/{question}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'QuestionController@edit','roles' => ['formateur', 'admin']])->name('question.edit');

// Answer
Route::get('answer', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@index','roles' => ['formateur', 'admin']])->name('answer.index');
Route::post('answer', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@store','roles' => ['formateur', 'admin']])->name('answer.store');
Route::get('answer/create', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@create','roles' => ['formateur', 'admin']])->name('answer.create');
Route::get('answer/{answer}', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@show','roles' => ['formateur', 'admin']])->name('answer.show');
Route::put('answer/{answer}', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@update','roles' => ['formateur', 'admin']])->name('answer.update');
Route::delete('answer/{answer}', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@destroy','roles' => ['formateur', 'admin']])->name('answer.destroy');
Route::get('answer/{answer}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'AnswerController@edit','roles' => ['formateur', 'admin']])->name('answer.edit');

// Classroom
Route::get('classroom', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@index','roles' => ['formateur', 'admin']])->name('classroom.index');
Route::post('classroom', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@store','roles' => ['formateur', 'admin']])->name('classroom.store');
Route::get('classroom/create', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@create','roles' => ['formateur', 'admin']])->name('classroom.create');
Route::get('classroom/{classroom}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@show','roles' => ['formateur', 'admin']])->name('classroom.show');
Route::put('classroom/{classroom}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@update','roles' => ['formateur', 'admin']])->name('classroom.update');
Route::delete('classroom/{classroom}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@destroy','roles' => ['formateur', 'admin']])->name('classroom.destroy');
Route::get('classroom/{classroom}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomController@edit','roles' => ['formateur', 'admin']])->name('classroom.edit');

// ClassroomGroup
Route::get('classroomgroup', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@index','roles' => ['formateur', 'admin']])->name('classroomgroup.index');
Route::post('classroomgroup', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@store','roles' => ['formateur', 'admin']])->name('classroomgroup.store');
Route::get('classroomgroup/create', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@create','roles' => ['formateur', 'admin']])->name('classroomgroup.create');
Route::get('classroomgroup/{classroomgroup}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@show','roles' => ['formateur', 'admin']])->name('classroomgroup.show');
Route::put('classroomgroup/{classroomgroup}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@update','roles' => ['formateur', 'admin']])->name('classroomgroup.update');
Route::delete('classroomgroup/{classroomgroup}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@destroy','roles' => ['formateur', 'admin']])->name('classroomgroup.destroy');
Route::get('classroomgroup/{classroomgroup}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomGroupController@edit','roles' => ['formateur', 'admin']])->name('classroomgroup.edit');

// Module
Route::get('module', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@index','roles' => ['formateur', 'admin']])->name('module.index');
Route::post('module', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@store','roles' => ['formateur', 'admin']])->name('module.store');
Route::get('module/create', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@create','roles' => ['formateur', 'admin']])->name('module.create');
Route::get('module/{module}', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@show','roles' => ['formateur', 'admin']])->name('module.show');
Route::put('module/{module}', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@update','roles' => ['formateur', 'admin']])->name('module.update');
Route::delete('module/{module}', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@destroy','roles' => ['formateur', 'admin']])->name('module.destroy');
Route::get('module/{module}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'ModuleController@edit','roles' => ['formateur', 'admin']])->name('module.edit');

// ClassroomQuizz
Route::get('classroomquizz', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@index','roles' => ['formateur', 'admin']])->name('classroomquizz.index');
Route::post('classroomquizz', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@store','roles' => ['formateur', 'admin']])->name('classroomquizz.store');
Route::get('classroomquizz/create', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@create','roles' => ['formateur', 'admin']])->name('classroomquizz.create');
Route::get('classroomquizz/{classroomquizz}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@show','roles' => ['formateur', 'admin']])->name('classroomquizz.show');
Route::put('classroomquizz/{classroomquizz}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@update','roles' => ['formateur', 'admin']])->name('classroomquizz.update');
Route::delete('classroomquizz/{classroomquizz}', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@destroy','roles' => ['formateur', 'admin']])->name('classroomquizz.destroy');
Route::get('classroomquizz/{classroomquizz}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'ClassroomQuizzController@edit','roles' => ['formateur', 'admin']])->name('classroomquizz.edit');

// Session
Route::get('session', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@index','roles' => ['formateur', 'admin']])->name('session.index');
Route::post('session', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@store','roles' => ['formateur', 'admin']])->name('session.store');
Route::get('session/create', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@create','roles' => ['formateur', 'admin']])->name('session.create');
Route::get('session/{session}', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@show','roles' => ['formateur', 'admin']])->name('session.show');
Route::put('session/{session}', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@update','roles' => ['formateur', 'admin']])->name('session.update');
Route::delete('session/{session}', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@destroy','roles' => ['formateur', 'admin']])->name('session.destroy');
Route::get('session/{session}/edit', ['middleware' => ['auth', 'roles'],'uses' => 'SessionController@edit','roles' => ['formateur', 'admin']])->name('session.edit');

//User_info
Route::get('userinfo', 'UserInfoController@index');
Route::get('userinfo/{id}','UserInfoController@create');
