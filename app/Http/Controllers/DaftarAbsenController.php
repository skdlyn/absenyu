<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Guru;
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
        $absen = Absen::where('id_kelas', $id)->get();
        $a = $absen;
        $na = absen::where('id_kelas', $id)->orderby('id_siswa', 'asc')->with('siswa')->get();
        $nb = absen::where('id_kelas', $id)->get();
        $ns = Siswa::where('id_kelas', $id)->with('absen')->get();
        // return $u;

        $today = today();
        $dates = [];
        // tanggal 1 bulan di bulan itu
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }
        // return $dates;

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
