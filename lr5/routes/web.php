<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductsController@index');
Route::get('/{id}/destroy', 'ProductsController@destroy');
Route::get('/add', 'ProductsController@add');
Route::post('/add/do', 'ProductsController@create');
Route::get('/showSession', 'ProductsController@showSession');