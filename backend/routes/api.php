<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;

Route::get('/', [App\Http\Controllers\Api\ServiceController::class, 'index'])->name('servicesApi');


Route::apiResource('services', ServiceController::class );


Route::get('services', 'ServiceController@index');
Route::get('services/{id}', 'ServiceController@show');
Route::post('services', 'ServiceController@store');
Route::put('services/{id}', 'ServiceController@update');
Route::delete('services/{id}', 'ServiceController@delete');
