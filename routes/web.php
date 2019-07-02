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
Route::get('/add', 'ApiController@create');
Route::get('/edit/{id}', 'ApiController@edit');

Route::post('/api/add', 'ApiController@store');
Route::get('/api/delete/{id}', 'ApiController@delete');
Route::post('/api/update', 'ApiController@update');

//Route routes
Route::get('/routes/{api_id}', 'RouteController@index');
Route::get('/routes/add/{api_id}', 'RouteController@create');
Route::get('/routes/edit/{route_id}', 'RouteController@edit');

Route::post('/route/add', 'RouteController@store');
Route::get('/route/delete/{route_id}', 'RouteController@delete');
Route::post('/route/update', 'RouteController@update');

// AJAX calls
Route::get('/export', 'Utils@export');
Route::post('/testDbConnection', 'Utils@testDbConnection');