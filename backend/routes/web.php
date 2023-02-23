<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//R del CRUD
Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\ServiceController::class, 'index']);

//Show
Route::get('/show/{id}', [ServiceController::class, 'show'])->name('showService');
