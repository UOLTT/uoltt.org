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

Route::get('/', 'PageController@index')->name('index');

Auth::routes();

Route::get('/commodities','CommoditiesController@index')->name('commodities.index');
Route::post('/commodities','CommoditiesController@store')
    ->middleware('auth')
    ->name('commodities.store');
Route::get('/commodities/report','CommoditiesController@create')
    ->middleware('auth')
    ->name('commodities.report');

Route::get('/faq','PageController@faq')->name('faq');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/intel','PageController@intel')->name('intel');

Route::get('/locations','LocationController@index')->name('locations.index');
Route::post('/locations','LocationController@store')
    ->middleware('auth')
    ->name('locations.store');
Route::get('/locations/report','LocationController@create')
    ->middleware('auth')
    ->name('locations.report');

Route::get('/shops','ShopsController@index')->name('shops.index');