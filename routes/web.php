<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PerhitunganController;
use App\Http\Controllers\admin\KriteriaController;
use App\Http\Controllers\admin\SubkriteriaController;
use App\Http\Controllers\Admin\HasilController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\PendonorController;
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

Route::middleware('user')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(KriteriaController::class)->group(function () {
        Route::get('/kriteria', 'index')->name('kriteria');
        Route::get('/kriteria/create', 'create')->name('kriteria.create');
        Route::post('/kriteia/store', 'store')->name('kriteria.store');
        Route::get('/kriteria/edit/{id}', 'edit')->name('kriteria.edit');
        Route::post('/kriteria/update/{id}', 'update')->name('kriteria.update');
        Route::get('/kriteria/destroy/{id}', 'destroy')->name('kriteria.destroy');
    });

    Route::controller(SubkriteriaController::class)->group(function () {
        Route::get('/subkriteria', 'index')->name('subkriteria');
        Route::get('/subkriteria/create', 'create')->name('subkriteria.create');
        Route::post('/subkriteria/store', 'store')->name('subkriteria.store');
        Route::get('/subkriteria/edit/{id}', 'edit')->name('subkriteria.edit');
        Route::post('/subkriteria/update/{id}', 'update')->name('subkriteria.update');
        Route::get('/subkriteria/destroy/{id}', 'destroy')->name('subkriteria.destroy');
    });

    Route::controller(PendonorController::class)->group(function () {
        Route::get('/pendonor', 'index')->name('pendonor');
        Route::get('/pendonor/create', 'create')->name('pendonor.create');
        Route::post('/pendonor/store', 'store')->name('pendonor.post');
        Route::post('/pendonor/filter', 'filter')->name('pendonor.filter');
        Route::get('/pendonor/edit/{id}', 'edit')->name('pendonor.edit');
        Route::post('/pendonor/update/{id}', 'update')->name('pendonor.update');
        Route::get('/pendonor/destroy/{id}', 'destroy')->name('pendonor.destroy');
    });

    Route::controller(PerhitunganController::class)->group(function () {
        Route::get('/perhitungan', 'index')->name('perhitungan');
        Route::post('/perhitungan/filter', 'filter')->name('perhitungan.filter');
        Route::post('/perhitungan/store', 'store')->name('perhitungan.store');
        Route::get('/perhitungan/show/{id}', 'show')->name('perhitungan.show');
        Route::get('/perhitungan/destroy/{id}', 'destroy')->name('perhitungan.destroy');
    });

    Route::controller(HasilController::class)->group(function () {
        Route::get('/hasil', 'index')->name('hasil');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/petugas', 'indexPetugas')->name('petugas');
        Route::get('/petugas/create', 'create')->name('petugas.create');
        Route::post('/petugas/store', 'store')->name('petugas.store');
        Route::get('/petugas/edit/{id}', 'edit')->name('petugas.edit');
        Route::post('/petugas/update/{id}', 'update')->name('petugas.update');
        Route::get('/petugas/destroy/{id}', 'destroy')->name('petugas.destroy');
    });

    Route::controller(ReportController::class)->group(function () {
        Route::get('/report/pendonor/pdf/{bidang}/{tahun}', 'exportPendonor')->name('export.pendonor.pdf');
        Route::get('/report/hasil/pdf/{id}', 'exportHasil')->name('export.hasil.pdf');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/login/out', 'logout')->name('login.out');
});
