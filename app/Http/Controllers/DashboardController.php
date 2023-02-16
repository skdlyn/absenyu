<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;

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
        return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
    }

        if (auth()->user()->role == 'siswa') {
            return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
        } else {    
            return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
        }
    }
}
