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
        $h = Absen::where('siswa_id', $user->id)->where('status', 'hadir')->count();
        $i = Absen::where('siswa_id', $user->id)->where('status', 'izin')->count();
        $sk = Absen::where('siswa_id', $user->id)->where('status', 'sakit')->count();
        $a = Absen::where('siswa_id', $user->id)->where('status', 'alpha')->count();

        if (auth()->user()->role == 'siswa') {
            return view('dashsiswa', compact('k', 's', 'g', 'user', 'h', 'i', 'sk', 'a'));
            // return view('dashboard',compact('k','s','g','user'));    
        } else {
            return view('DashAlip', compact('k', 's', 'g', 'user'));
        }
    }
}
