<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar produk
Route::get('/', [Controller::class],'index')->name('index');

// Route untuk menampilkan form tambah produk
Route::get('/products/create', [Controller::class],'create')->name('products.create');

// Route untuk menyimpan data produk baru
Route::post('/products', [Controller::class],'store')->name('products.store');

// Route untuk menampilkan detail produk
Route::get('/products/{id}', [Controller::class],'show')->name('products.show');

// Route untuk menampilkan form edit produk
Route::get('/products/{id}/edit', [Controller::class],'edit')->name('products.edit');

// Route untuk mengupdate data produk
Route::put('/products/{id}',[Controller::class],'update')->name('products.update');

// Route untuk menghapus produk
Route::delete('/products/{id}', [Controller::class],'destroy')->name('products.destroy');
