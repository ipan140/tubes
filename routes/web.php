<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\DatabarangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;

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
// Route::get('/HalamanAwal', [App\Http\Controllers\HalAwalController::class, 'index'])->name('HalamanAwal');
Route::get('/HalamanProduk/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('HalamanProduk');
// Route::get('/cart/add/{id}', [App\Http\Controllers\HomeController::class, 'add'])->name('cart.add');
Route::post('/cart/add/{id}', [App\Http\Controllers\HomeController::class, 'add'])->name('cart.add');


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
    // Route::put('/Databarang/{id}', [DatabarangController::class, 'update'])->name('Databarang.update');
    // Route::get('/Databarang/{id}/edit', [DatabarangController::class, 'edit'])->name('Databarang.edit');
    Route::delete('/Databarang/{id}', 'DatabarangController@destroy')->name('dashboard.destroy');
    // Route::resource('admin', AdminController::class);
    // Rest of your routes...
});
