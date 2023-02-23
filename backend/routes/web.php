<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


// Route::get('/{path}', function () {
//     return view('welcome');
// })->where('path' , '.*');

Route::get('/services', 'Api\ServiceController@index');
Route::post('/store', 'Api\ServiceController@store');
Route::delete('/delete/{id}', 'Api\ServiceController@destroy');
Route::get('edit/{id}', 'Api\ServiceController@edit');
Route::put('update/{id}', 'Api\ServiceController@update');
