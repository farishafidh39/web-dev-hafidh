<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemesananItemController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get("/", [LandingController::class, 'index']);

Route::resource('konsumens', KonsumenController::class);
Route::resource('keranjangs', KeranjangController::class);
Route::resource('produks', ProdukController::class);
Route::resource('pembayarans', PembayaranController::class);
Route::resource('pemesanans', PemesananController::class);
Route::resource('pemesanan-items', PemesananItemController::class);
Route::resource('users', UserController::class);

Route::resource('kategori-produks', App\Http\Controllers\KategoriProdukController::class);