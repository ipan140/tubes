<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HalProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;



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


Auth::routes();

Route::get('profile', ProfileController::class)->name('profile');
// Route::get('/HalamanProduk', [App\Http\Controllers\HalProdukController::class, 'index'])->name('HalamanProduk');
Route::get('/HalamanAwal', [App\Http\Controllers\HalAwalController::class, 'index'])->name('HalamanAwal');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/HalamanProduk/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('HalamanProduk');

// route untuk halaman awal
Route::get('/', function () {
    return view('welcome');
});

// route untuk dashboard admin
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// dashboard data tabel
Route::get('/datatable', function () {
    return view('dashboard.tables');
});

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
