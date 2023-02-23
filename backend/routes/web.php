<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;



Auth::routes();
Route::get('/', function () { return view('auth.login');});

Route::get('/', function () { return view('home');}); Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('services', App\Http\Controllers\ServiceController::class)->middleware('auth'); 


