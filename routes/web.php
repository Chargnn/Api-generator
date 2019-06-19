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

Route::post('/route/add', 'RouteController@store');
Route::get('/route/delete/{id}', 'RouteController@delete');
Route::post('/route/update', 'RouteController@update');


//Database routes
Route::post('/database/add', 'DatabaseController@store');
Route::get('/database/delete/{id}', 'DatabaseController@delete');
Route::post('/database/update', 'DatabaseController@update');