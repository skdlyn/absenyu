<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Guru;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;

class DaftarAbsenController extends Controller
{

    public function index()
    {
        $kelas = user::where('role', 'guru')->get();
        return view('absen.daftar', compact('kelas'));
    }

    public function create($id)
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        // $guru = kelas::where('guru_id', $id)->with('guru')->get();
        // $a = Absen::where('kelas_id', $id)->join('siswa', 'siswa.id', '=', 'siswa_id')->get();
        $guru = user::where('role', 'guru')->where('kelas_id',$id)->get();
        $a = absen::where('kelas_id', $id)->join('users', 'users.id', '=', 'siswa_id')->get();
        $today = today()->format('m');
        // return $today;
        
        $tgl = [];
        foreach ($a as $date) {
            $tgl[] = $date->tanggal;
        }
        $t = array_unique($tgl);

        
        return view('absen.listtanggal', compact('t', 'guru', 'siswa', 'ua', 'status'));
        // return view('absenkelas', compact('t', 'guru', 'a'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}


   
        // tanggal 1 bulan di bulan itu
        // $today = today();
        // $a ='First day : ' . date("Y-m-01", strtotime($today)) . ' - Last day : ' . date("Y-m-t", strtotime($today));
        // $awal = date('y-m-01',strtotime($today));
        // $akhir = date('t',strtotime($today)); 
        // $range = [];
        // for ($i = 1;$i<= $akhir; $i++ ){
        //     $range[]= $i;
        // }
        // return $range;