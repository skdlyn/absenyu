<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Absen;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    // public function __construct()
    // {
    //  
    // }


    public function dash()
    {
        $jumlah = guru::all()->count();
        $jumlah2 = siswa::all()->count();
        $jumlah3 = kelas::all()->count();
        $a = auth()->user()->id;
        $k = siswa::where('kelas_id')->get();
        // $s = siswa::all();
        // $k = kelas::find(1)->with('siswa');
        // return $k;   
        // return true;

        if (auth()->user()->role == 'siswa') {
            return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
        } else {    
            return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
        }
    }
}
