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
        $guru = user::where('role', 'guru')->where('kelas_id', $id)->get();
        // $a = absen::where('kelas_id', $id)->join('users', 'users.id', '=', 'siswa_id')->get('name');
        $a = absen::where('kelas_id', $id)->join('users', 'users.id', '=', 'siswa_id')->get('name');
        // $a = absen::where('kelas_id', $id)->join('users', 'users.id', '=', 'siswa_id')->get('status');
        $b = $a->unique('name');
        // return $b;
        
        $coba = user::where('role', 'siswa')->where('kelas_id', $id)->get();
        // return $coba;
        foreach ($coba as $c) {
            $datas[] =  $c->id;
        }
        
        $stats = absen::where('siswa_id','4')->get('status');
        // return $stats;
        // $u = array_unique($b);
        // return $u;
        $today = today();
        $dates = [];
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $d[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('d');
            $m = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('m');
            $y = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y');
            // eak

        }

        // $stats1 = absen::where('siswa_id', '4')->get();
        // $stats2 = absen::where('siswa_id', '5')->get();
        // $stats3 = absen::where('siswa_id', '6')->get();
        // $stats4 = absen::where('siswa_id', '7')->get();
        // $stats5 = absen::where('siswa_id', '8')->get();
        // $stats = [$stats1, $stats2, $stats3, $stats4, $stats5];
        // $c = [$b, $stats];
        // foreach ($b as $b) {
        //     $a3[] = [$b,$stats];
        // }
        // return $a3;

        // return $c;
        // $stats = absen::whereIn('siswa_id', $datas)->get();
        // return $data3;
        // return $stats;   
        // for($i = 0;$i < count($datas); $i++){
        // $stats[] = absen::whereIn('siswa_id',$datas)->get();
        // }

        // foreach ($stats as $sts ) {
        //     $ha[] = $sts;
        // }
        // return $ha;
        // return $coba;
        // return $f;
        // return $tahun;  

        // $tgl = [];
        // foreach ($a as $date) {
        //     $tgl[] = $date->d$d;
        // }
        // $t = array_unique($tgl);
        return view('absen.listtanggal', compact('d', 'm', 'y', 'guru', 'a', 'b', 'stats', 'c'));
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