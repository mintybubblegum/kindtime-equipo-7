<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;

Route::get('/', [App\Http\Controllers\Api\ServiceController::class, 'index'])->name('servicesApi');


Route::apiResource('services', ServiceController::class );