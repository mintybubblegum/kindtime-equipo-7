<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


// Route::get('/{path}', function () {
//     return view('welcome');
// })->where('path' , '.*');

Route::get('/services', 'Api\ApiController@index');
Route::post('/store', 'Api\ApliController@store');
Route::delete('/delete/{id}', 'Api\ApiController@destroy');
Route::get('edit/{id}', 'Api\ApiController@edit');
Route::put('update/{id}', 'Api\ApiController@update');
