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

Route::get('/','PagesController@index')->name('index');
Route::get('/test','PagesController@test');

Route::get('/feed', 'FeedController@index')->name('feed');;



Route::resource('bProfile', 'ReviewsController');
Route::resource('dis', 'DiscussionsController');
Route::resource('rec', 'RecommendationsController');



Auth::routes();



//To Handle Admin Login & Logout
Route::get('/admin/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
Route::get('/admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

//To Handle BrandUser Login
Route::get('/brand/login', 'Auth\BrandLoginController@showBrandLoginForm')->name('brand.login');
Route::post('/brand/login', 'Auth\BrandLoginController@brandLogin')->name('brand.login.submit');
Route::get('/brand/logout', 'Auth\BrandLoginController@brandLogout')->name('brand.logout');

//User Custom Logout 
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Users' Dashboards
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminHome', 'AdminHomeController@index')->name('admin.dashboard');
Route::get('/brandHome', 'BrandHomeController@index')->name('brand.dashboard');
