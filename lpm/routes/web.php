<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\DataController;
use App\Http\Middleware\DisableCache;


Route::get('/', function () {
    return view('index');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/masyarakat', [MasyarakatController::class, 'masyarakat'])->name('masyarakat')->middleware('auth');
Route::get('/masyarakat/{id}', [MasyarakatController::class, 'show'])->name('masyarakat.show')->middleware('auth');
Route::get('/tambah', [MasyarakatController::class, 'tambah'])->name('masyarakat.tambah')->middleware('auth');
Route::post('/tambah', [MasyarakatController::class, 'store'])->name('masyarakat.store')->middleware('auth');
Route::get('/hapus-masyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat.hapus')->middleware('auth');
