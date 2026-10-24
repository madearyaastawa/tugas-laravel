<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/produk', [ProdukController::class, 'index'])->middleware(['auth', 'verified'])->name('produk');;

Route::get('/keranjang', [KeranjangController::class, 'index'])->middleware(['auth', 'verified'])->name('keranjang');;

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
