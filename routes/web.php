<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

Route::name('dashboard.')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('index');
});

Route::name('barang.')->group(function () {
    Route::get('/stock-barang',[BarangController::class, 'index'])->name('index');
    Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view');
    Route::post('/add-barang',[BarangController::class, 'create'])->name('create');
    Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail');
    Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view');
    Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update');
    Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete');
    Route::post('/import-barang',[BarangController::class, 'barang_import'])->name('barang_import');
    Route::get('/export-barang-masuk',[BarangController::class, 'masuk_export'])->name('masuk_export');
    Route::post('/import-barang-masuk',[BarangController::class, 'masuk_import'])->name('masuk_import');
});

Route::name('masuk.')->group(function () {
    Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index');
    Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create');
    Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail');
    Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view');
    Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update');
    Route::delete('/delete-barang-masuk/{$id}',[MasukController::class, 'delete'])->name('delete');
});

Route::name('keluar.')->group(function () {
    Route::get('/barang-keluar-view',[KeluarController::class, 'index'])->name('index');
    Route::post('/barang-keluar',[KeluarController::class, 'create'])->name('create');
    Route::get('/detail-barang-keluar/{id}',[KeluarController::class, 'detail'])->name('detail');
    Route::get('/edit-barang-keluar/{id}',[KeluarController::class, 'edit_view'])->name('edit_view');
    Route::post('/update-barang-keluar/{id}',[KeluarController::class, 'update'])->name('update');
    Route::delete('/delete-barang-keluar/{$id}',[KeluarController::class, 'delete'])->name('delete');
});