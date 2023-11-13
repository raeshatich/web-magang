<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\TataController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KetentuanController;

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
    return view('splash');
});


Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::post('/home/store', [HomeController::class, 'store']);
Route::get('/daftar', [HomeController::class, 'crud'])->middleware('admin');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/syarat', [SyaratController::class, 'index'])->middleware('auth');
Route::get('/crud', [SyaratController::class, 'crud'])->middleware('admin');
Route::post('/crud/store', [SyaratController::class, 'store']);
Route::post('/crud/{id}/update', [SyaratController::class, 'update']);
Route::get('/crud/{id}/destroy', [SyaratController::class, 'destroy']);

Route::get('/tata', [TataController::class, 'index'])->middleware('auth');
Route::get('/tatacrud', [TataController::class, 'create'])->middleware('admin');
Route::post('/tatacrud/store', [TataController::class, 'store']);
Route::post('/tatacrud/{id}/update', [TataController::class, 'update']);
Route::get('/tatacrud/{id}/destroy', [TataController::class, 'destroy']);

Route::get('/info', [InformasiController::class, 'index'])->middleware('auth');
Route::get('/infocrud', [InformasiControlleraController::class, 'create'])->middleware('admin');
Route::post('/infocrud/store', [InformasiController::class, 'store']);
Route::post('/infocrud/{id}/update', [InformasiController::class, 'update']);
Route::get('/infocrud/{id}/destroy', [InformasiController::class, 'destroy']);

Route::get('/unitcrud', [UnitController::class, 'create'])->middleware('admin');
Route::post('/unitcrud/store', [UnitController::class, 'store']);
Route::post('/unitcrud/{id}/update', [UnitController::class, 'update']);
Route::get('/unitcrud/{id}/destroy', [UnitController::class, 'destroy']);

Route::get('/posisicrud', [PosisiController::class, 'index'])->middleware('admin');
Route::post('/posisicrud/store', [PosisiController::class, 'store']);
Route::post('/posisicrud/{id}/update', [PosisiController::class, 'update']);
Route::get('/posisicrud/{id}/destroy', [PosisiController::class, 'destroy']);

Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('auth');
Route::get('/anggotacrud', [AnggotaController::class, 'crud'])->middleware('admin');
Route::get('/anggotacrud/create', [AnggotaController::class, 'create']);
Route::post('/anggotacrud/store', [AnggotaController::class, 'store']);
Route::post('/anggotacrud/{id}/update', [AnggotaController::class, 'update']);
Route::get('/anggotacrud/{id}/destroy', [AnggotaController::class, 'destroy']);

Route::get('/ketentuan', [KetentuanController::class, 'index'])->middleware('auth');
Route::get('/ketentuancrud', [KetentuanController::class, 'create'])->middleware('auth');
Route::post('/ketentuancrud/store', [KetentuanController::class, 'store']);
Route::post('/ketentuancrud/{id}/update', [KetentuanController::class, 'update']);
Route::get('/ketentuancrud/{id}/destroy', [KetentuanController::class, 'destroy']);


Route::get('/infocrud', [InformasiController::class, 'create'])->middleware('admin');
Route::post('/infocrud', [InformasiController::class, 'store']);

Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');

