<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
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

// Route::middleware('auth')->group(function(){
    
//     Route::name('barang.')->group(function () {
//         Route::get('/stock-barang',[BarangController::class, 'index'])->name('index')->middleware('role:admin');
//         Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view')->middleware('role:admin');
//         Route::post('/add-barang',[BarangController::class, 'create'])->name('create')->middleware('role:admin');
//         Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail')->middleware('role:admin');
//         Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view')->middleware('role:admin');
//         Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update')->middleware('role:admin');
//         Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete')->middleware('role:admin');
//         Route::post('/import-barang',[BarangController::class, 'barang_import'])->name('barang_import')->middleware('role:admin');
//         Route::get('/export-barang-masuk',[BarangController::class, 'masuk_export'])->name('masuk_export')->middleware('role:admin');
//         Route::post('/import-barang-masuk',[BarangController::class, 'masuk_import'])->name('masuk_import')->middleware('role:admin');
//     });

//     Route::name('masuk.')->group(function () {
//         Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index')->middleware('role:admin');
//         Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create')->middleware('role:admin');
//         Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail')->middleware('role:admin');
//         Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view')->middleware('role:admin');
//         Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update')->middleware('role:admin');
//         Route::delete('/delete-barang-masuk/{$id}',[MasukController::class, 'delete'])->name('delete')->middleware('role:admin');
//     });

//     Route::name('keluar.')->group(function () {
//         Route::get('/barang-keluar-view',[KeluarController::class, 'index'])->name('index')->middleware('role:admin');
//         Route::post('/barang-keluar',[KeluarController::class, 'create'])->name('create')->middleware('role:admin');
//         Route::get('/detail-barang-keluar/{id}',[KeluarController::class, 'detail'])->name('detail')->middleware('role:admin');
//         Route::get('/edit-barang-keluar/{id}',[KeluarController::class, 'edit_view'])->name('edit_view')->middleware('role:admin');
//         Route::post('/update-barang-keluar/{id}',[KeluarController::class, 'update'])->name('update')->middleware('role:admin');
//         Route::delete('/delete-barang-keluar/{$id}',[KeluarController::class, 'delete'])->name('delete')->middleware('role:admin');
//     });

//     Route::name('dashboard.')->group(function () {
//         Route::get('/',[DashboardController::class, 'index'])->name('index')->middleware('role:admin');
//     });

//     Route::name('auth.')->group(function () {
//         Route::get('/toRegister',[AuthController::class, 'toRegister'])->name('toRegister')->middleware('role:admin');
//         Route::post('/register',[AuthController::class, 'register'])->name('register')->middleware('role:admin');
//     });

//     // PIC

//     Route::name('barang.')->group(function () {
//         Route::get('/stock-barang',[BarangController::class, 'index'])->name('index')->middleware('role:pic');
//         Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view')->middleware('role:pic');
//         Route::post('/add-barang',[BarangController::class, 'create'])->name('create')->middleware('role:pic');
//         Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail')->middleware('role:pic');
//         Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view')->middleware('role:pic');
//         Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update')->middleware('role:pic');
//         Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete')->middleware('role:pic');
//         Route::post('/import-barang',[BarangController::class, 'barang_import'])->name('barang_import')->middleware('role:pic');
//         Route::get('/export-barang-masuk',[BarangController::class, 'masuk_export'])->name('masuk_export')->middleware('role:pic');
//         Route::post('/import-barang-masuk',[BarangController::class, 'masuk_import'])->name('masuk_import')->middleware('role:pic');
//     });

//     Route::name('masuk.')->group(function () {
//         Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index')->middleware('role:pic');
//         Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create')->middleware('role:pic');
//         Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail')->middleware('role:pic');
//         Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view')->middleware('role:pic');
//         Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update')->middleware('role:pic');
//         Route::delete('/delete-barang-masuk/{$id}',[MasukController::class, 'delete'])->name('delete')->middleware('role:pic');
//     });

//     Route::name('keluar.')->group(function () {
//         Route::get('/barang-keluar-view',[KeluarController::class, 'index'])->name('index')->middleware('role:pic');
//         Route::post('/barang-keluar',[KeluarController::class, 'create'])->name('create')->middleware('role:pic');
//         Route::get('/detail-barang-keluar/{id}',[KeluarController::class, 'detail'])->name('detail')->middleware('role:pic');
//         Route::get('/edit-barang-keluar/{id}',[KeluarController::class, 'edit_view'])->name('edit_view')->middleware('role:pic');
//         Route::post('/update-barang-keluar/{id}',[KeluarController::class, 'update'])->name('update')->middleware('role:pic');
//         Route::delete('/delete-barang-keluar/{$id}',[KeluarController::class, 'delete'])->name('delete')->middleware('role:pic');
//     });

//     Route::name('dashboard.')->group(function () {
//         Route::get('/',[DashboardController::class, 'index'])->name('index')->middleware('role:pic');
//     });

// });

Route::name('auth.')->group(function (){
    Route::get('/login',[AuthController::class, 'toLogin'])->name('toLogin');
    Route::post('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'role:admin,pic,user'])->group(function(){
    
    Route::name('barang.')->group(function () {
        Route::get('/stock-barang',[BarangController::class, 'index'])->name('index');
        Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view');
        Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail');;
    });

    Route::name('masuk.')->group(function () {
        Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index');
        Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail');
    });

    Route::name('keluar.')->group(function () {
        Route::get('/barang-keluar-view',[KeluarController::class, 'index'])->name('index');
        Route::get('/detail-barang-keluar/{id}',[KeluarController::class, 'detail'])->name('detail');
    });

    Route::name('dashboard.')->group(function () {
        Route::get('/',[DashboardController::class, 'index'])->name('index');
    });

    Route::name('project.')->group(function () {
        Route::get('/project', [ProjectController::class, 'index'])->name('index');
    });

});

Route::middleware(['auth', 'role:admin,pic'])->group(function(){
    
    Route::name('barang.')->group(function () {
        Route::post('/add-barang',[BarangController::class, 'create'])->name('create');
        Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view');
        Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update');
        Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete');
        Route::post('/import-barang',[BarangController::class, 'barang_import'])->name('barang_import');
        Route::get('/export-barang-masuk',[BarangController::class, 'masuk_export'])->name('masuk_export');
        Route::post('/import-barang-masuk',[BarangController::class, 'masuk_import'])->name('masuk_import');
    });

    Route::name('masuk.')->group(function () {
        Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create');
        Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view');
        Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update');
        Route::delete('/delete-barang-masuk/{id}',[MasukController::class, 'delete'])->name('delete');
    });

    Route::name('keluar.')->group(function () {
        Route::post('/barang-keluar',[KeluarController::class, 'create'])->name('create');
        Route::get('/edit-barang-keluar/{id}',[KeluarController::class, 'edit_view'])->name('edit_view');
        Route::post('/update-barang-keluar/{id}',[KeluarController::class, 'update'])->name('update');
        Route::delete('/delete-barang-keluar/{id}',[KeluarController::class, 'delete'])->name('delete');
    });

    Route::name('dashboard.')->group(function () {
        Route::get('/',[DashboardController::class, 'index'])->name('index');
    });

    Route::name('project.')->group(function () {
        Route::get('/project', [ProjectController::class, 'index'])->name('index');
    });

});
    
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::name('auth.')->group(function () {
        Route::get('/toRegister',[AuthController::class, 'toRegister'])->name('toRegister');
        Route::post('/register',[AuthController::class, 'register'])->name('register');
    });
});

// Route::middleware(['auth', 'role:admin'])->group(function(){
    
//     Route::name('auth.')->group(function () {
//         Route::get('/toRegister',[AuthController::class, 'toRegister'])->name('toRegister');
//         Route::post('/register',[AuthController::class, 'register'])->name('register');
//     });

// });

// Route::name('dashboard.')->group(function () {
//     Route::get('/',[DashboardController::class, 'index'])->name('index');
// });

// Route::name('barang.')->group(function () {
//     Route::get('/stock-barang',[BarangController::class, 'index'])->name('index');
//     Route::get('/add-barang-view',[BarangController::class, 'add_view'])->name('add_view');
//     Route::post('/add-barang',[BarangController::class, 'create'])->name('create');
//     Route::get('/detail-barang/{id}',[BarangController::class, 'detail'])->name('detail');
//     Route::get('/edit-barang/{id}',[BarangController::class, 'edit_view'])->name('edit_view');
//     Route::post('/update-barang/{id}',[BarangController::class, 'update'])->name('update');
//     Route::delete('/delete-barang/{id}',[BarangController::class, 'delete'])->name('delete');
//     Route::post('/import-barang',[BarangController::class, 'barang_import'])->name('barang_import');
//     Route::get('/export-barang-masuk',[BarangController::class, 'masuk_export'])->name('masuk_export');
//     Route::post('/import-barang-masuk',[BarangController::class, 'masuk_import'])->name('masuk_import');
// });

// Route::name('masuk.')->group(function () {
//     Route::get('/barang-masuk-view',[MasukController::class, 'index'])->name('index');
//     Route::post('/barang-masuk',[MasukController::class, 'create'])->name('create');
//     Route::get('/detail-barang-masuk/{id}',[MasukController::class, 'detail'])->name('detail');
//     Route::get('/edit-barang-masuk/{id}',[MasukController::class, 'edit_view'])->name('edit_view');
//     Route::post('/update-barang-masuk/{id}',[MasukController::class, 'update'])->name('update');
//     Route::delete('/delete-barang-masuk/{$id}',[MasukController::class, 'delete'])->name('delete');
// });

// Route::name('keluar.')->group(function () {
//     Route::get('/barang-keluar-view',[KeluarController::class, 'index'])->name('index');
//     Route::post('/barang-keluar',[KeluarController::class, 'create'])->name('create');
//     Route::get('/detail-barang-keluar/{id}',[KeluarController::class, 'detail'])->name('detail');
//     Route::get('/edit-barang-keluar/{id}',[KeluarController::class, 'edit_view'])->name('edit_view');
//     Route::post('/update-barang-keluar/{id}',[KeluarController::class, 'update'])->name('update');
//     Route::delete('/delete-barang-keluar/{$id}',[KeluarController::class, 'delete'])->name('delete');
// });