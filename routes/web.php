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

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin_konten'])->name('admin_konten');




Route::get('/admin_konten', [App\Http\Controllers\HomeController::class, 'admin_konten'])->name('admin_konten');




Route::get('/admin_komentar', [App\Http\Controllers\HomeController::class, 'admin_komentar'])->name('admin_komentar');


Route::get('/admin_komentar/hapus/{id}', [App\Http\Controllers\HomeController::class, 'hapus'])->name('hapus');

Route::get('/admin_konten/hapus/{id}', [App\Http\Controllers\HomeController::class, 'hapuss'])->name('hapuss');

Route::get('/admin_konten/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::post('/admin_konten/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::post('admin_konten/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');


Route::get('/toko', [App\Http\Controllers\HomeController::class, 'toko'])->name('toko');


Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');


Route::get('/pesan', [App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');


Route::get('/cari', [App\Http\Controllers\HomeController::class, 'cari'])->name('cari');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
