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
        $k = kelas::all()->count();
        $user = auth()->user();
        // return $user;
        $s = user::where('role', 'siswa')->count();
        $g = user::where('role', 'guru')->count();
     
        if (auth()->user()->role == 'siswa') {
            return view('dashsiswa',compact('k','s','g','user'));    
            // return view('dashboard',compact('k','s','g','user'));    
        } else {    
            return view('dashboard',compact('k','s','g','user'));        
        }
    }
}
