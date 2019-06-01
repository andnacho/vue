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

Route::get('vue', 'VueController@index');

Route::get('/', 'UrlController@url');
Route::get('signed/{user}', 'UrlController@urlSigned')->name('signed')->middleware('signed');

Route::get('/second', function () {
    return view('viewComposer2');
});


Route::resource('users.questions', 'QuestionsController');


Route::get('/welcome/{id}', 'HomeController@index');

Route::view('/login', 'auth.login')->name('login');

Auth::routes();
Route::resource('users', 'UsersController');


Route::get('/home', 'HomeController@index')->name('home');
