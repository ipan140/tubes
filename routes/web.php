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


Route::get('profile', ProfileController::class)->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('/HalamanProduk', [App\Http\Controllers\HalProdukController::class, 'index'])->name('HalamanProduk');
Route::get('/HalamanAwal', [App\Http\Controllers\HalAwalController::class, 'index'])->name('HalamanAwal');

Auth::routes();

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
