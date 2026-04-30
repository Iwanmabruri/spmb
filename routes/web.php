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

//Pendidikan
Route::get('/admin/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');

//Pekerjaan
Route::get('/admin/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');

//Pekerjaan
Route::get('/admin/penghasilan', [PenghasilanController::class, 'index'])->name('penghasilan');
