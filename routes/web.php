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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/questions', 'QuestionsController@index');

Route::post('/questions', 'QuestionsController@store');

Route::get('/questions/create', 'QuestionsController@create');

Route::get('/questions/{question}', 'QuestionsController@show');

Route::post('/questions/{question}/replies', 'RepliesController@store');

Route::put('questions/{question}/replies/{reply}/validate', 'QuestionsController@validateReply'); 

Route::get('/questions/{question}', 'QuestionsController@show');

Auth::routes();

