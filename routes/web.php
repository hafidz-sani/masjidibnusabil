<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/photo', [App\Http\Controllers\PhotoController::class, 'index'])->name('photo');
// Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda');

Route::resource('galleries', App\Http\Controllers\GalleryController::class);

Route::resource('events', App\Http\Controllers\EventController::class);

Route::resource('galleries', App\Http\Controllers\GalleryController::class);

Route::resource('events', App\Http\Controllers\EventController::class);
