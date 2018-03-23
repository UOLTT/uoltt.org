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

Route::get('/bids', 'BidController@index')->name('bids.index');
Route::post('/bids', 'BidController@store')
    ->middleware('permission:create_reports')
    ->name('bids.store');
Route::get('/bids/report', 'BidController@create')
    ->middleware('permission:create_reports')
    ->name('bids.report');

Route::get('/commodities', 'CommoditiesController@index')->name('commodities.index');
Route::post('/commodities', 'CommoditiesController@store')
    ->middleware('permission:create_reports')
    ->name('commodities.store');
Route::get('/commodities/report', 'CommoditiesController@create')
    ->middleware('permission:create_reports')
    ->name('commodities.report');
Route::get('/commodities/{commodity}', 'CommoditiesController@show')->name('commodities.show');

Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/intel', 'PageController@intel')->name('intel');

Route::get('/locations', 'LocationController@index')->name('locations.index');
Route::post('/locations', 'LocationController@store')
    ->middleware('permission:create_reports')
    ->name('locations.store');
Route::get('/locations/report', 'LocationController@create')
    ->middleware('permission:create_reports')
    ->name('locations.report');

Route::post('/profile', 'ProfileController@update')
    ->middleware('auth')
    ->name('profile.update');
Route::get('/profile', 'ProfileController@view')
    ->middleware('auth')
    ->name('profile.view');

Route::get('/shops', 'ShopsController@index')->name('shops.index');
Route::post('/shops', 'ShopsController@store')
    ->name('shops.store')
    ->middleware('permission:create_reports');
Route::get('/shops/report', 'ShopsController@create')
    ->middleware('permission:create_reports')
    ->name('shops.report');
Route::get('/shops/{shop}', 'ShopsController@show')
    ->name('shops.show');
