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

Route::get('/products', 'ProductController@getIndex');

Route::get('/products/show/{id}', 'ProductController@getShow');

Route::post('/products/subtract/{id}', 'ProductController@postSubtract');

Route::post('/products/add/{id}', 'ProductController@postAdd');

Route::get('/products/create', 'ProductController@getCreate');

Route::post('/products/createProduct', 'ProductController@postCreateProduct');

Route::post('/products/delete/{id}', 'ProductController@delete');