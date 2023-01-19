<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dash(){
        
        $jumlah = guru::all()->count();
        $jumlah2 = siswa::all()->count();
        $jumlah3 = kelas::all()->count();
        // return ($jumlah);
        return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
    }
}
