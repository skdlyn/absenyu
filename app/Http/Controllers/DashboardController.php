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

        if (auth()->user()->role =='admin') {
            return view('dashboard', compact('jumlah', 'jumlah2', 'jumlah3'));
        }else if(auth()->user()->role =='sekertaris'){
            return 'sekre';
        }else if(auth()->user()->role =='bk'){
            return 'bk';
        }else{
            return view('dashboard',compact('jumlah', 'jumlah2', 'jumlah3'));
        }
    }
}
