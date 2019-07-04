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

Route::get('/', 'ApiController@index');

// API routes
Route::get('/api/add', 'ApiController@create');
Route::get('/api/edit/{api_id}', 'ApiController@edit');

Route::post('/api/add', 'ApiController@store');
Route::patch('/api/update/{api_id}', 'ApiController@update');
Route::delete('/api/delete/{api_id}', 'ApiController@delete');

//Route routes
Route::get('/routes/{api_id}', 'RouteController@index');
Route::get('/routes/add/{api_id}', 'RouteController@create');
Route::get('/routes/edit/{route_id}', 'RouteController@edit');

Route::post('/routes/add', 'RouteController@store');
Route::patch('/routes/update/{route_id}', 'RouteController@update');
Route::delete('/routes/delete/{route_id}', 'RouteController@delete');

// AJAX calls
Route::get('/export', 'Utils@export');
Route::post('/testDbConnection', 'Utils@testDbConnection');