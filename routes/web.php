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
    return redirect('home');
})->middleware('guest.id');

Auth::routes();

Route::get('/home', 'VoteController@create')->name('home')->middleware('guest.id');
Route::post('/vote', 'VoteController@store')->name('vote')->middleware('guest.id');

Route::resource('questions', 'QuestionController');
    // ->only(['index', 'create', 'show', 'edit']);
// Route::apiResource('questions', 'QuestionController');
// middleware('auth')->
