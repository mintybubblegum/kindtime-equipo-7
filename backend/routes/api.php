<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Api\ServiceController::class, 'index'])->name('servicesApi');


Route::get('/services', 'Api\ServiceController@index');
Route::post('/store', 'Api\ServiceController@store');
Route::delete('/delete/{id}', 'Api\ServiceController@destroy');
Route::get('edit/{id}', 'Api\ServiceController@edit');
Route::put('update/{id}', 'Api\ServiceController@update');