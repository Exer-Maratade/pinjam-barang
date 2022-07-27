<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\userController;
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

Route::get('/',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/Logout',[LoginController::class, 'Logout'])->middleware('auth');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::get('/tambahUser',[userController::class, 'index'])->middleware('auth')->name('tambahUser');
Route::post('/tambahUser',[userController::class, 'store'])->middleware('auth')->name('tambahUser');
Route::post('/editUser/{id}',[userController::class, 'editUser'])->middleware('auth')->name('editUser');
Route::post('/hapusUser/{id}',[userController::class, 'hapus'])->middleware('auth')->name('hapusUser');

Route::get('/barang',[BarangController::class, 'index'])->middleware('auth');
// Route::post('/barang',[BarangController::class, 'store'])->middleware('auth');
Route::get('/inputBarang',[BarangController::class, 'create'])->middleware('auth');
Route::post('/inputBarang',[BarangController::class, 'store'])->middleware('auth');


Route::post('/pinjamBarang/{id}',[TransaksiController::class, 'store'])->middleware('auth')->name('pinjamBarang');
Route::get('/permintaan',[TransaksiController::class, 'permintaan'])->middleware('auth')->name('permintaan');
Route::post('/permintaan/{id}',[TransaksiController::class, 'approve'])->middleware('auth')->name('approve');


Route::get('/pengembalian',[TransaksiController::class, 'pengembalian'])->middleware('auth')->name('pengembalian');
Route::post('/pengembalian/{id}',[TransaksiController::class, 'approvePengembalian'])->middleware('auth')->name('approvePengembalian');

Route::get('/terpakai',[BarangController::class, 'terpakai'])->middleware('auth')->name('terpakai');
Route::get('/pinjaman-saya',[TransaksiController::class, 'pinjamanSaya'])->middleware('auth')->name('pinjaman-saya');
Route::post('/permintaan/kembalikan/{id}',[TransaksiController::class, 'kembalikan'])->middleware('auth')->name('kembalikan');

// Route::get('/editBarang{id}',[BarangController::class, 'viewUpdate'])->middleware('auth')->name('editBarang');
// Route::post('/editBarang/{id}',[BarangController::class, 'viewUpdate'])->middleware('auth')->name('editBarang');

Route::post('/editBarang/{id}',[BarangController::class, 'update'])->middleware('auth')->name('update');

Route::post('/hapusBarang/{id}',[BarangController::class, 'hapus'])->middleware('auth')->name('hapus');
Route::post('/hapusKategori/{id}',[KategoriController::class, 'hapusKategori'])->middleware('auth')->name('hapusKategori');

Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth')->name('index');
Route::post('/kategori', [KategoriController::class, 'store'])->middleware('auth')->name('store');
