<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\LokasiWisataController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\FasilitasController;

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

Route::get('/', [LandController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/akun', [AkunController::class, 'index'])->middleware('auth')->name('akun');
Route::get('/akun-add', [AkunController::class, 'create'])->middleware('auth')->name('akun-add');
Route::post('/akun-store', [AkunController::class, 'store'])->middleware('auth');
Route::get('/akun-edit/{id}', [AkunController::class, 'edit'])->middleware('auth')->name('akun-edit');
Route::put('/akun-update/{id}', [AkunController::class, 'update'])->middleware('auth');
Route::get('/akun-destroy/{id}', [AkunController::class, 'destroy'])->middleware('auth');

Route::get('/kriteria', [KriteriaController::class, 'index'])->middleware('auth')->name('kriteria');
Route::get('/kriteria-add', [KriteriaController::class, 'create'])->middleware('auth')->name('kriteria-add');
Route::post('/kriteria-store', [KriteriaController::class, 'store'])->middleware('auth');
Route::get('/kriteria-edit/{id}', [KriteriaController::class, 'edit'])->middleware('auth')->name('kriteria-edit');
Route::put('/kriteria-update/{id}', [KriteriaController::class, 'update'])->middleware('auth');
Route::get('/kriteria-destroy/{id}', [KriteriaController::class, 'destroy'])->middleware('auth');

Route::get('/fasilitas', [FasilitasController::class, 'index'])->middleware('auth')->name('fasilitas');
Route::get('/fasilitas-add', [FasilitasController::class, 'create'])->middleware('auth')->name('fasilitas-add');
Route::post('/fasilitas-store', [FasilitasController::class, 'store'])->middleware('auth');
Route::get('/fasilitas-edit/{id}', [FasilitasController::class, 'edit'])->middleware('auth')->name('fasilitas-edit');
Route::put('/fasilitas-update/{id}', [FasilitasController::class, 'update'])->middleware('auth');
Route::get('/fasilitas-destroy/{id}', [FasilitasController::class, 'destroy'])->middleware('auth');

Route::get('/kecamatan', [KecamatanController::class, 'index'])->middleware('auth')->name('kecamatan');
Route::get('/kecamatan-add', [KecamatanController::class, 'create'])->middleware('auth')->name('kecamatan-add');
Route::post('/kecamatan-store', [KecamatanController::class, 'store'])->middleware('auth');
Route::get('/kecamatan-edit/{id}', [KecamatanController::class, 'edit'])->middleware('auth')->name('kecamatan-edit');
Route::put('/kecamatan-update/{id}', [KecamatanController::class, 'update'])->middleware('auth');
Route::get('/kecamatan-destroy/{id}', [KecamatanController::class, 'destroy'])->middleware('auth');
Route::get('/kecamatan-request', [KecamatanController::class, 'request'])->name('kecamatan-request');

Route::get('/lokasi_wisata', [LokasiWisataController::class, 'index'])->middleware('auth')->name('lokasi_wisata');
Route::get('/lokasi_wisata-add', [LokasiWisataController::class, 'create'])->middleware('auth')->name('lokasi_wisata-add');
Route::post('/lokasi_wisata-store', [LokasiWisataController::class, 'store'])->middleware('auth');
Route::get('/lokasi_wisata-edit/{id}', [LokasiWisataController::class, 'edit'])->middleware('auth')->name('lokasi_wisata-edit');
Route::put('/lokasi_wisata-update/{id}', [LokasiWisataController::class, 'update'])->middleware('auth');
Route::get('/lokasi_wisata-destroy/{id}', [LokasiWisataController::class, 'destroy'])->middleware('auth');
Route::get('/lokasi_wisata-request', [LokasiWisataController::class, 'request'])->name('lokasi_wisata-request');
// Route::get('/lokasi_wisata-cetak/{id}', [LokasiWisataController::class, 'cetak']);

Route::get('/peta', [PetaController::class, 'index'])->name('peta');
