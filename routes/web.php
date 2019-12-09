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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selector', function () {
    return view('index');
});

Route::get('/datatemplate', function () {
	
	return view('index');
	
});

Route::get('db', 'Users@checkDb');

Route::get('/elook', 'TemplateController@index');
