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

Route::get('/movies', ['as' => 'all-movies', 'uses' => 'MovieController@index']);


Route::get('/movies/create', 'MovieController@create');
Route::post('/movies', ['as' => 'store-movie', 'uses' => 'MovieController@store']);


Route::get('/movies/{id}', ['as' => 'single-movie', 'uses' => 'MovieController@show']);
Route::post('/movies/{id}/comments', ['as' => 'comment-movie', 'uses' => 'CommentController@store']);

