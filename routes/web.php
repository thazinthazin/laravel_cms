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

Route::get('/', 'PageController@index');

/* For Product */

Route::get('products','PageController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('products/create', 'ProductController@store');

Route::get('products/{id}/add-cart','PageController@add');
Route::get('products/cart','PageController@show');
