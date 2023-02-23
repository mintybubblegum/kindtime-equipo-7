<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::get('/{path}', function () {
    return view('welcome');
})->where('path' , '.*');

Route::get('/services', 'Api\CategoryController@index');
Route::post('/store', 'Api\CategoryController@store');
Route::delete('/delete/{id}', 'Api\CategoryController@destroy');
Route::get('edit/{id}', 'Api\CategoryController@edit');
Route::put('update/{id}', 'Api\CategoryController@update');
