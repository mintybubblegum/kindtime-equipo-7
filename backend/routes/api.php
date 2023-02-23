<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Api\ServiceController::class, 'index'])->name('servicesApi');