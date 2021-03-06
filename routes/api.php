<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('status',function() {
    return response()->json([
        'status' => 'ok'
    ]);
});

Route::group(['namespace'=>'API'],function() {
    Route::get('/bids','BidsController@index');
    Route::get('/dnd', 'DndController@index');
});