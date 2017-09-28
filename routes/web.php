<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/questions', function () {
    return view('pages.questions');
})->name('questions');

Route::get('/users', function () {
    return view('pages.users');
})->name('users');

Route::get('/tags', function () {
    return view('pages.tags');
})->name('tags');

Route::get('/summarys', function () {
    return view('pages.summarys');
})->name('summarys');

Route::get('/courses', function () {
    return view('pages.courses');
})->name('courses');

// Auth::routes();
// Route::resource('/question', 'QuestionController',
//                 ['except' => ['edit']]);

Route::get('/question', function(){return abort(404);});
Route::post('/question', 'QuestionController@store')->name('question.store');
Route::get('/question/{id}/{name?}', 'QuestionController@show')->name('question.show')->where(['id' => '[0-9]+', 'name' => '[a-z0-9]+']);
Route::get('/question/ask', 'QuestionController@create')->name('question.create');
Route::put('/question/{id}/update', 'QuestionController@update')->name('question.update')->where(['id' => '[0-9]+']);
Route::delete('/question/{id}', 'QuestionController@delete')->name('question.delete')->where(['id' => '[0-9]+']);
