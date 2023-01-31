<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Guru;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarAbsenController extends Controller
{

    public function index()
    {
        $kelas = Kelas::with('guru')->get();
        $guru = guru::all();
        // return $kelas   ;
        return view('daftarabsen.daftar', compact('kelas', 'guru'));
    }

    public function create($id)
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $a = Absen::where('id_kelas', $id)->get();
        $nb = absen::where('id_kelas', $id)->get();
        $ns = Siswa::where('id_kelas', $id)->with('absen')->get();
       
        
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

        $tgl = [];
        foreach ($nb as $date) {
            $tgl[] = $date->tanggal ;
        }
        $t = array_unique($tgl);
        return view('daftarabsen.listtanggal', compact('t', 'guru', 'ns', 'a'));
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
