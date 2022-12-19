<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\ListAbsenController;

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

Route::get('/login', function () {
    return view('login');
});
//guest
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    // Route::get('/absen', function () {
    //     return view('absen');
    // });
});


//admin
Route::middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    // absen
    Route::resource('absen', AbsenController::class);
    route::get('absen/{absen}',[AbsenController::class,'absen'])->name('absen.tambah');
    // route::get('absen/{absen}/listabsen',[AbsenController::class,'listabsen'])->name('absen.list');
    // route::get('list', [AbsenController::class,'list'])->name('list.absen');
    // route::get('absen/create',[AbsenController::class, 'create'])->name('absenc.create');
    // route::get('absen/{id}/')
    // Route::get('list', [AbsenController::class, 'list'])->name('absen.list');
    // Route::get('listkelas', [AbsenController::class, 'listkelas'])->name('absen.listkelas');
    // Route::get('pending', [AbsenController::class, 'pending'])->name('absen.pending');
    // route::get('/listabsen', function(){
    //     return view('absen.listabsen');
    // });


    route::resource('listabsen',ListAbsenController::class);
    // route::get('listabsen/{id_kelas}/{tanggal}', [ListAbsenController::class,'show']);
    route::get('listabsen/{id_kelas}/{tanggal}', [ListAbsenController::class,'tanggal']);
    // list kelas
    // Route::resource('showkelas', DataKelasController::class);
    
    
    
    // CRUD DATA KELAS
    // Route::resource('datasiswa', DataController::class);
    // Route::get('datasiswa/{id}', [DataController::class, 'hapus'])->name('datasiswa.hapus');
    
    
    // CRUD KELAS
    Route::resource('datakelas', DataKelasController::class);
    route::get('showkelas/{id}/hapus', [DataKelasController::class])->name('showkelas.hapus');
    
    // CRUD SISWA
    Route::resource('datasiswa', DatasiswaController::class);
    // route::get('/tambahsiswa',function(){
    //     return view('kelas.tambahsiswa');
    // });
    route::get('datakelas/{id}/hapus', [DatasiswaController::class, 'hapus'])->name('datasiswa.hapus');




    Route::resource('guru', GuruController::class);
    Route::get('guru/{nama}/hapus', [GuruController::class, 'hapus'])->name('guru.hapus');

    // route::get('/rekaplist', function(){
    //     return view('rekaplist');
    // });



    Route::post('logout', [LoginController::class, 'logout']);
    // cobaroute

    // route::get('/showkelas',[DataKelasController::class]);
    // route::get('/showkelas', function(){
    //     return view('showkelas');
    // });
});
