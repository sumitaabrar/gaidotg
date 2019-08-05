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

Route::get('/','IndexController@index')->name('index');
Route::get('/search', 'PagesController@gSearch')->name('gSearch');
Route::post('/search', 'PagesController@search')->name('search');
Route::get('/sSearch', 'PagesController@sSearch')->name('sSearch');
Route::post('/sSearch', 'PagesController@searchBrand')->name('searchBrand');

Route::post('/test', 'PagesController@testStore')->name('test.store');

Route::get('/product','PagesController@product')->name('product.list');
Route::get('/place','PagesController@place')->name('place.list');
Route::post('/product', 'PagesController@reviewSearch')->name('reviewSearch');

Route::get('/displayRec','PagesController@displayRec');

//Route::resource('preferences', 'DisplayRecController');
Route::resource('bOrg', 'BrandsController');
Route::resource('reviews', 'ReviewsController');
Route::post('/rating', 'ReviewsController@storeRating')->name('rating.store');
Route::match(['put', 'patch'], '/rating/{id}','ReviewsController@updateRating')->name('rating.update');

Route::resource('sugg', 'SuggestionsController');

Route::resource('dis', 'DiscussionsController');
Route::resource('rec', 'RecommendationsController');
Route::resource('dcomm', 'DCommentsController');
Route::resource('duseful', 'DUsefulsController');
Route::resource('rcomm', 'RCommentsController');
Route::resource('ruseful', 'RUsefulsController');

Auth::routes();



Route::post('bOrg/{bOrg}', 'ReviewsController@myUpdate');

//To Handle Admin Login & Logout
Route::get('/admin/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
Route::get('/admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

//To Handle BrandUser Login
Route::get('/brand/login', 'Auth\BrandLoginController@showBrandLoginForm')->name('brand.login');
Route::post('/brand/login', 'Auth\BrandLoginController@brandLogin')->name('brand.login.submit');
Route::post('/brand/logout', 'Auth\BrandLoginController@brandLogout')->name('brand.logout');

//User Custom Logout 
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Users' Dashboards
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminHome', 'AdminHomeController@index')->name('admin.dashboard');
Route::get('/brandHome', 'BrandHomeController@index')->name('brand.dashboard');

//Edit User Profile
Route::match(['put', 'patch'], '/home/{user}','HomeController@update')->name('home.update');

//Brand Report
Route::get('/brand/report', 'AssessmentsController@index')->name('brand.report');
Route::get('/brand/reportGen', 'AssessmentsController@create')->name('brand.report.gen');

//Brand Announcements
Route::resource('/brand/announce', 'AnnouncementsController');

//Brand Discussion View
Route::get('/brand/dis', 'BrandHomeController@discussion')->name('brand.dis');

//Brand Recommendation View
Route::get('/brand/rec', 'BrandHomeController@recommendation')->name('brand.rec');

//Edit Brand Profile
Route::match(['put', 'patch'], '/brand/{user}','BrandHomeController@update')->name('brand.update');