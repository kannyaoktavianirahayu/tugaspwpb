<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\BebasController;
use App\Http\Controllers\ApaController;
use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'halo']);
Route::get('/halaman1', [HalamanController::class, 'index']);
Route::get('/halaman2', [HalamanController::class, 'halaman2']);
Route::get('/SelamatDatang', [HalamanController::class, 'welcome']);
Route::get('/latihan', [BebasController::class, 'latihan']);
Route::get('/tampil', [UserController::class, 'index']);
Route::get('/tambah_data', [UserController::class, 'tambah_data']);
Route::post('/tambah_data', [UserController::class, 'input_data']);
Route::get('/tampil_data', [UserController::class, 'tampil_data']);
Route::get('/hapus_data/{id}', [UserController::class, 'hapus_data']);
Route::get('/edit_data/{id}', [UserController::class, 'edit_data']);
Route::post('/edit_data/{id}', [UserController::class, 'update_data']);
Route::get('/tambah_siswaa', [ApaController::class, 'tambah_siswaa']);
Route::post('/tambah_siswaa', [ApaController::class, 'input_siswaa']);
Route::get('/tampil_siswaa', [ApaController::class, 'tampil_siswaa']);
Route::get('/hapus_siswaa/{id}', [ApaController::class, 'hapus_siswaa']);
Route::get('/edit_siswaa/{id}', [ApaController::class, 'edit_siswaa']);
Route::post('/edit_siswaa/{id}', [ApaController::class, 'update_siswaa']);
Route::get('/tambah_barang', [BarangController::class, 'tambah_barang']);
Route::post('/tambah_barang', [BarangController::class, 'input_barang']);
Route::get('/tampil_barang', [BarangController::class, 'tampil_barang']);
Route::get('/hapus_barang/{id}', [BarangController::class, 'hapus_barang']);
Route::get('/edit_barang/{id}', [BarangController::class, 'edit_barang']);
Route::post('/edit_barang/{id}', [BarangController::class, 'update_barang']);
