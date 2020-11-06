<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');


Route::get('/toko', [App\Http\Controllers\HomeController::class, 'toko'])->name('toko');


Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');


Route::get('/pesan', [App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');


Route::get('/cari', [App\Http\Controllers\HomeController::class, 'cari'])->name('cari');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
