<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MasukController;

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
    return view('pages.dashboard');
});

Route::name('barang.')->group(function () {
    Route::get('/stock-barang',[BarangController::class, 'index'])->name('index');
    Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view');
    Route::post('/add-barang',[BarangController::class, 'create'])->name('create');
    Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail');
    Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view');
    Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update');
    Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete');
});

Route::name('masuk.')->group(function () {
    Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index');
    Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create');
    Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail');
    Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view');
    Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update');
    Route::delete('/delete-barang-masuk/{$id}',[MasukController::class, 'delete'])->name('delete');
});
