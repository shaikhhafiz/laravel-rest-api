<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('person', 'PersonController@getList');
Route::get('person/{id}', 'PersonController@getById');
Route::post('person', 'PersonController@save');
Route::put('person/{id}', 'PersonController@update');
Route::delete('person/{id}', 'PersonController@delete');
