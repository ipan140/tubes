<?php

use App\Http\Controllers\AdminController;
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


// route untuk halaman awal

Route::get('/', function () {
    return view('welcome');
});






Route::middleware(['auth', 'User'])->group(function () {
    Route::get('profile', ProfileController::class)->name('profile');
    Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/cart/add/{id}', [App\Http\Controllers\HomeController::class, 'add'])->name('cart.add');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardadmin', [DatabarangController::class, 'index'])->name('dashboardadmin');
    Route::resource('Databarang', DatabarangController::class);
    Route::delete('/Databarang/{id}', 'DatabarangController@destroy')->name('dashboard.destroy');
    Route::get('exportPdf', [DatabarangController::class, 'exportPdf'])->name('dataproduk.exportPdf');

});
