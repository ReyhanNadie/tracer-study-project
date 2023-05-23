<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\AlumniController;


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
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/statistik', function () {
    return view('statistik');
})->name('statistik');

Route::get('/alumni', function () {
    return view('alumni');
})->name('alumni');

// Route::get('/home', [HomeController::class, 'index'])-name('home');
// Route::get('/statistik', [StatistikController::class, 'index']);
// Route::get('/alumni', [AlumniController::class, 'index']);