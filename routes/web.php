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

Route::get('/','PagesController@index');
Route::get('/userProfile','PagesController@userProfile');

//Route::get('/bProfile','PagesController@bProfile');



Route::resource('bProfile', 'ReviewsController');
Route::resource('dis', 'DiscussionsController');
Route::resource('rec', 'RecommendationsController');
