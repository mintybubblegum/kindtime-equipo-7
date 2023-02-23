<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;




Route::get('/services', 'Api\ServiceController@index');
Route::post('/store', 'Api\ServiceController@store');
Route::delete('/services/{id}', 'Api\ServiceController@destroy');
Route::get('edit/{id}', 'Api\ServiceController@edit');
Route::put('update/{id}', 'Api\ServiceController@update');
