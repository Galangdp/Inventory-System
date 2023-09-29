<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    Route::get('/edit-barang',[BarangController::class, 'edit_view'])->name('edit_view');
    Route::get('/update-barang',[BarangController::class, 'update'])->name('update');
    Route::get('/delete-barang',[BarangController::class, 'delete'])->name('delete');
});
