<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\HalProdukController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

// route untuk login
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route untuk welkompage
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
