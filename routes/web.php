<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KopiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1 >Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('Bootstrap', function () {
    return view('bootstrap');
});

Route::get('Robodog', function () {
    return view('robodog');
});

Route::get('RobodogITS', function () {
    return view('robodogITS');
});

Route::get('Template', function () {
    return view('temp');
});

Route::get('WeeklyActivity', function () {
    return view('weeklyActivity');
});

Route::get('WelcomeITS', function () {
    return view('welcomeITS');
});

Route::get('LandingPage', function () {
    return view('landingPage');
});

Route::get('Portofolio', function () {
    return view('portofolioWeb');
});

Route::get('Boost', function () {
    return view('linktreeBoost');
});

Route::get('Dell', function () {
    return view('dellLanding');
});

Route::get('Pomellato', function () {
    return view('pomellatoWebsite');
});

Route::get('Menu', function () {
    return view('menu');
});

//pertemuan 8
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


//route CRUD kopi (Pra EAS)
Route::get('/kopi', [KopiController::class, 'index'])->name('kopi.index');
Route::get('/kopi/create', [KopiController::class, 'create'])->name('kopi.create');
Route::post('/kopi/store', [KopiController::class, 'store'])->name('kopi.store');
Route::get('/kopi/edit/{KodeKopi}', [KopiController::class, 'edit'])->name('kopi.edit');
Route::put('/kopi/update/{KodeKopi}', [KopiController::class, 'update'])->name('kopi.update');
Route::delete('/kopi/delete/{KodeKopi}', [KopiController::class, 'destroy'])->name('kopi.destroy');
Route::get('/kopi/cari', [KopiController::class, 'cari'])->name('kopi.cari');
