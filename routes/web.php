<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AmbildataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenghasilanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/banner', [HomeController::class, 'indexBanner'])->name('banner.index');
Route::post('/banner/store', [HomeController::class, 'storeBanner'])->name('banner.store');
// Route::get('/banner/edit/{id}', [HomeController::class, 'editBanner'])->name('banner.edit');
Route::put('/banner/update/{id}', [HomeController::class, 'updateBanner'])->name('banner.update');
Route::delete('/banner/delete/{id}', [HomeController::class, 'destroyBanner'])->name('banner.destroy');

Route::get('/mitra', [HomeController::class, 'indexMitra'])->name('mitra.index');
Route::post('/mitra/store', [HomeController::class, 'storeMitra'])->name('mitra.store');
Route::put('/mitra/update/{id}', [HomeController::class, 'updateMitra'])->name('mitra.update');
Route::delete('/mitra/delete/{id}', [HomeController::class, 'destroyMitra'])->name('mitra.destroy');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');

//Jurusan
Route::get('/admin/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/admin/jurusan/create', [JurusanController::class, 'create'])->name('create.jurusan');
Route::post('admin/jurusan/store', [JurusanController::class, 'store'])->name('store.jurusan');
Route::get('admin/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('edit.jurusan');
Route::put('admin/jurusan/{id}', [JurusanController::class, 'update'])->name('update.jurusan');
Route::delete('admin/jurusan/delete/{id}', [JurusanController::class, 'destroy'])->name('destroy.jurusan');

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

//Ambil Data
Route::get('/admin/ambildata', [AmbildataController::class, 'index'])->name('ambildata');
Route::post('/admin/ambildata/store', [AmbildataController::class, 'storemurid'])->name('ambildata.store');
Route::get('/admin/murid/{id}/lengkapi', [AmbildataController::class, 'lengkapi'])->name('murid.lengkapi');
Route::post('/admin/murid/update/{id}', [AmbildataController::class, 'updatelengkapi'])->name('murid.updatelengkapi');

Route::post('/admin/ambildata', [AmbildataController::class, 'synchronization'])->name('santri.sync');
Route::get('/admin/ambildata/detail/{id}', [AmbildataController::class, 'detail'])->name('santri.detail');
Route::post('/admin/ambildata/tambah/{id}', [AmbildataController::class, 'tambahMurid'])->name('santri.tambah');
// Route::get('/admin/siswa/lengkapi/{id}', [MuridController::class, 'lengkapi'])->name('siswa.lengkapi');
// Route::post('/admin/siswa/lengkapi/{id}', [MuridController::class, 'updateLengkapi'])->name('siswa.updateLengkapi');
//Data Siswa
Route::prefix('admin/murid')->group(function () {

    // INDEX
    Route::get('/', [MuridController::class, 'index'])->name('murid');

    // STEP 1

    Route::post('/simpan1', [MuridController::class, 'store1'])->name('murid.store');
    Route::get('/step1/{id}', [MuridController::class, 'createStep1'])->name('murid.step1');
    Route::post('/step1', [MuridController::class, 'storeStep1'])->name('murid.store.step1');

    // STEP 2
    Route::get('/step2/{id}', [MuridController::class, 'step2'])->name('murid.step2');
    Route::post('/step2/{id}', [MuridController::class, 'storeStep2'])->name('murid.store.step2');

    // STEP 3
    Route::get('/step3/{id}', [MuridController::class, 'step3'])->name('murid.step3');
    Route::post('/step3/{id}', [MuridController::class, 'storeStep3'])->name('murid.store.step3');

    //STEP 4
    Route::get('/step4/{id}', [MuridController::class, 'step4'])->name('murid.step4');
    Route::post('/step4/{id}', [MuridController::class, 'storeStep4'])->name('murid.store.step4');

    Route::get('edit/step1/{id}', [MuridController::class, 'editstep1'])->name('murid.edit.step1');
    Route::put('update/step1/{id}', [MuridController::class, 'updateStep1'])->name('murid.update.step1');
    Route::get('edit/step2/{id}', [MuridController::class, 'editstep2'])->name('murid.edit.step2');
    Route::put('update/step2/{id}', [MuridController::class, 'updateStep2'])->name('murid.update.step2');
    Route::get('edit/step3/{id}', [MuridController::class, 'editstep3'])->name('murid.edit.step3');
    Route::put('update/step3/{id}', [MuridController::class, 'updateStep3'])->name('murid.update.step3');
    Route::get('edit/step4/{id}', [MuridController::class, 'editstep4'])->name('murid.edit.step4');
    Route::put('update/step4/{id}', [MuridController::class, 'updateStep4'])->name('murid.update.step4');

    Route::get('/print/{id}', [MuridController::class, 'print'])->name('murid.print');
    Route::get('/{id}/detail', [MuridController::class, 'show'])->name('murid.detail');

    Route::post('/upload-berkas/{id}', [MuridController::class, 'uploadBerkas'])
        ->name('murid.upload.berkas');

    Route::delete('/hapus/{id}', [MuridController::class, 'destroy'])
        ->name('murid.destroy');
});

Route::get('/get-kota/{provinsi_id}', [MuridController::class, 'get_kabupaten']);
Route::get('/get-kecamatan/{kabupaten_id}', [MuridController::class, 'get_kecamatan']);
Route::get('/get-desa/{kecamatan_id}', [MuridController::class, 'get_desa']);
