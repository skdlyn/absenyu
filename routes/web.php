<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RekapabsenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AkunController;
// use App\Http\Controllers\RekapabsenController;

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DaftarAbsenController;
use App\Http\Controllers\Dashboardcontroller;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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
    return view('landing');
});

Route::get('/Dashboard_Siswa', function () {
    return view('dashsiswa');
});
Route::get('/rekapsiswa', function () {
    return view('persiswa');
});

// profile
// Route::get('/', function () {
//     return view('dashsiswa');
// });
// Route::resource('profile', ProfileController::class);
// Route::get('/editprofile', function () {

// });
route::get('/landing', function () {
    return view('landing');
});


//guest
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    // Route::get('register', [LoginController::class, 'signup'])->name('signup');
    // Route::post('register', [LoginController::class, 'tambah'])->name('tambah');;
});


//admin
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [dashboardcontroller::class, 'dash']);

    // absen
    Route::resource('absen', AbsenController::class);
    Route::get('pending', [AbsenController::class, 'pending'])->name('absen.pending');

    // daftar absen
    route::resource('list', DaftarAbsenController::class);
    route::get('list/{nama}/tanggal', [DaftarAbsenController::class, 'show']);


    // list kelas
    Route::resource('showkelas', KelasController::class);
    route::get('showkelas/{id}/hapus', [KelasController::class])->name('showkelas.hapus');

    //rekap
    Route::get('rekaplist', [RekapController::class, 'index']);
    Route::get('rekapdata', [RekapController::class, 'index']);

    Route::resource('datasiswa', DataController::class);

    Route::get('/pdfsiswa', [RekapabsenController::class, 'cetakpdf'])->name('cetakpdf');

    // data kelas
    Route::resource('datakelas', DataKelasController::class);
    route::get('showkelas/{id}/hapus', [DataKelasController::class])->name('showkelas.hapus');

    // CRUD SISWA
    Route::resource('datasiswa', DatasiswaController::class);
    route::get('datakelas/{id}/hapus', [DatasiswaController::class, 'hapus'])->name('datasiswa.hapus');




    Route::resource('guru', GuruController::class);
    Route::get('guru/{nama}/hapus', [GuruController::class, 'hapus'])->name('guru.hapus');
    // Route::delete('logout', [LoginController::class, 'logout']);
    Route::post('/logout', [LoginController::class, 'logout']);
    // cobaroutex


    //Profile Siswa

    Route::get('/uploadsurat', [AbsenController::class, 'surat'])->name('surat');

    // Route::resource('Profile', ProfileController::class);
    route::resource('akun', AkunController::class);
});
