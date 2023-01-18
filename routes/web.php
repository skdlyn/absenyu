<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\RekapabsenController;
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

Route::get('/siswa', function () {
    return view('dashboard_siswa');
    
});

Route::resource('profile', ProfileController::class);
    

Route::get('/editprofile', function () {
    return view('editprofile');
    
});
//guest
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('register', [LoginController::class, 'signup'])->name('signup');
    Route::post('register', [LoginController::class, 'tambah'])->name('tambah');;
    // Route::get('/absen', function () {
    //     return view('absen');
    // });
});


//admin
Route::middleware('auth')->group(function () {
    // absen
    Route::resource('absen', AbsenController::class);
    // route::get('absen/{id}/')
    Route::get('list', [AbsenController::class, 'list'])->name('absen.list');
    // Route::get('listkelas', [AbsenController::class, 'listkelas'])->name('absen.listkelas');
    Route::get('pending', [AbsenController::class, 'pending'])->name('absen.pending');
    // route::get('/list', function(){
    //     return view('absen.list');
    // });

    // list kelas
    Route::resource('showkelas', KelasController::class);
    route::get('showkelas/{id}/hapus', [KelasController::class])->name('showkelas.hapus');
// Route::get('showkelas', KelasController::class);
    
    //rekap
    Route::get('rekaplist', [RekapController::class, 'index']);
    Route::get('rekapdata', [RekapController::class, 'index']);


    Route::resource('dashboard', DashboardController::class);
    Route::resource('dashboardsiswa', DashboardController::class);
    Route::resource('datasiswa', DataController::class);
    
    Route::get('/cetakpdf', [RekapabsenController::class, 'cetakpdf'])->name('cetakpdf');

        // data kelas
    Route::resource('datakelas', DataKelasController::class);
    // route::get('datakelas/{id}/');
    Route::get('datakelas/{id}/hapus', [DataKelasController::class, 'hapus'])->name('datakelas.hapus');


    Route::get('datasiswa/{id_siswa}/hapus', [DataController::class, 'hapus'])->name('datasiswa.hapus');
    
    
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

    //Profile Siswa

});
