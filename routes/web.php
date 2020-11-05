<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');

Route::get('/toko', [App\Http\Controllers\HomeController::class, 'toko'])->name('toko');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');
Route::get('/pesan', [App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');
Route::get('/toko/cari', [App\Http\Controllers\HomeController::class, 'cari'])->name('cari');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'pencari'])->name('pesan');
// Route::get('/kontak', 
// [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/toko', function () {
//     return view('toko');
// });
// Route::get('/kontak', function () {
//     return view('kontak');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
