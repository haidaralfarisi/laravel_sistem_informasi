<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\KategoriController;

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

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [AdminController::class, 'index'])->name('admin.index');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('index.kategori');

    Route::get('/tambahdata', [KategoriController::class, 'tambahdata'])->name('tambah.kategori');

    Route::post('/insertdata', [KategoriController::class, 'insertdata'])->name('simpan.kategori');

    Route::get('/tampilkandata/{id}', [KategoriController::class, 'tampilkandata'])->name('edit.kategori');

    Route::post('/updatedata/{id}', [KategoriController::class, 'updatedata'])->name('update.kategori');

    Route::delete('/deletedata/{id}', [KategoriController::class, 'deletedata'])->name('hapus.kategori');

    // halaman index produk (tabel)
    Route::get('/produk', [ProdukController::class, 'index'])->name('index.produk');

    // menampilkan halaman tambah data
    Route::get('/produk_tambah', [ProdukController::class, 'create'])->name('tambah.produk');

    // untuk menyimpan data
    Route::post('/produk_simpan', [ProdukController::class, 'save'])->name('simpan.produk');

    // menampilkan halaman edit dengan data produk berdasarkan id
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('edit.produk');

    // update produk
    Route::post('/produk/{id}/update', [ProdukController::class, 'update'])->name('update.produk');

    // delete produk
    Route::delete('/produk/{id}', [ProdukController::class, 'delete'])->name('delete.produk');
});

Route::get('/', [PublicController::class, 'index'])->name('publik');
