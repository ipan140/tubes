<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HalProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembelianController;
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
Route::get('/HalamanProduk', [App\Http\Controllers\HalProdukController::class, 'index'])->name('HalamanProduk');
Route::get('/HalamanAwal', [App\Http\Controllers\HalAwalController::class, 'index'])->name('HalamanAwal');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pembelian', [App\Http\Controllers\PembelianController::class, 'index'])->name('pembelian');

// route untuk halaman awal
Route::get('/', function () {
    return view('welcome');
});

// route untuk dashboard admin
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('/pembayaran', function () {
//     return view('pembayaran');
// });

// Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
// Route::resource('Databarang', DatabarangController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rest of your code...

Route::middleware(['auth', 'User'])->group(function () {
    // Route::get('/dashboarduser', [KasirController::class, 'index'])->name('homekasir');
    Route::get('profile', ProfileController::class)->name('profile');
    // Route::get('/HalamanProduk', [App\Http\Controllers\HalProdukController::class, 'index'])->name('HalamanProduk');
    // Rest of your routes...
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardadmin', [DatabarangController::class, 'index'])->name('dashboardadmin');
    Route::resource('Databarang', DatabarangController::class);
    Route::delete('/Databarang/{id}', 'DatabarangController@destroy')->name('dashboard.destroy');
    // Route::resource('admin', AdminController::class);
    // Rest of your routes...
});
