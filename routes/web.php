<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('layout.layouts');
});

// Routes Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/addProduk', [ProdukController::class, 'create'])->name('addProduk');
Route::post('/store', [ProdukController::class, 'store'])->name('store');