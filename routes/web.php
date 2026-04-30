<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenghasilanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');

//Jurusan
Route::get('/admin/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/admin/jurusan/create', [JurusanController::class, 'create'])->name('create.jurusan');
Route::post('admin/jurusan/store', [JurusanController::class, 'store'])->name('store.jurusan');
Route::get('admin/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('edit.jurusan');
Route::put('admin/jurusan/{id}', [JurusanController::class, 'update'])->name('update.jurusan');
Route::delete('/jurusan/delete/{id}', [JurusanController::class, 'destroy'])->name('destroy.jurusan');

//Agama
Route::get('/admin/agama', [AgamaController::class, 'index'])->name('agama');
Route::post('admin/agama/store', [AgamaController::class, 'store'])->name('agama.store');
Route::post('admin/agama/update/{id}', [AgamaController::class, 'update'])->name('agama.update');
Route::post('admin/agama/delete/{id}', [AgamaController::class, 'destroy'])->name('agama.delete');

//Pendidikan
Route::get('/admin/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::post('admin/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::post('admin/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::post('admin/pendidikan/delete/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.delete');

//Pekerjaan
Route::get('/admin/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::post('admin/pekerjaan/store', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
Route::post('admin/pekerjaan/update/{id}', [PekerjaanController::class, 'update'])->name('pekerjaan.update');
Route::post('admin/pekerjaan/delete/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.delete');

//Pekerjaan
Route::get('/admin/penghasilan', [PenghasilanController::class, 'index'])->name('penghasilan');
Route::post('admin/penghasilan/store', [PenghasilanController::class, 'store'])->name('penghasilan.store');
Route::post('admin/penghasilan/update/{id}', [PenghasilanController::class, 'update'])->name('penghasilan.update');
Route::post('admin/penghasilan/delete/{id}', [PenghasilanController::class, 'destroy'])->name('penghasilan.delete');
