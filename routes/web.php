<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Penduduk
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::get('/penduduk/add', [PendudukController::class, 'add']);
Route::post('/penduduk/simpan', [PendudukController::class, 'simpan']);
Route::get('/penduduk/edit/{id_penduduk}', [PendudukController::class, 'edit']);
Route::post('/penduduk/update/{id_penduduk}', [PendudukController::class, 'update']);
Route::get('/penduduk/delete/{id_penduduk}', [PendudukController::class, 'delete']);
Route::get('/penduduk/cari', [PendudukController::class, 'cari']);
Route::get('/penduduk/detail/{id_penduduk}',[PendudukController::class, 'detail']);

// Region
Route::get('/wilayah', [RegionController::class, 'index'])->name('wilayah');
Route::get('/wilayah/add', [RegionController::class, 'add']);
Route::post('/wilayah/simpan', [RegionController::class, 'simpan']);
Route::get('/wilayah/edit/{id_region}', [RegionController::class, 'edit']);
Route::post('/wilayah/update/{id_region}', [RegionController::class, 'update']);
Route::get('/wilayah/delete/{id_region}', [RegionController::class, 'delete']);
Route::get('/wilayah/cari', [RegionController::class, 'cari']);
Route::get('/wilayah/detail/{id_region}', [RegionController::class, 'detail']);
Route::post('/wilayah/izin/{id_region}', [RegionController::class, 'izin']);


// Table
Route::get('/surat', [SuratController::class, 'index'])->name('surat');
Route::get('/surat/cetakSKTS', [SuratController::class, 'printSKTS']);
Route::get('/surat/cetakSKDS', [SuratController::class, 'printSKDS']);
