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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/photo', [App\Http\Controllers\PhotoController::class, 'index'])->name('photo');
Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('video');
Route::get('/kajian', [App\Http\Controllers\KajianController::class, 'index'])->name('kajian');
Route::get('/keuangan', [App\Http\Controllers\KeuanganController::class, 'index'])->name('keuangan');
