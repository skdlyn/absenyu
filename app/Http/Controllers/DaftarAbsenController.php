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
    public function list()
    {
      
    }

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
    { $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $absen = Absen::where('id_kelas', $id)->get();

        $a = $absen;
        $ab = Absen::where('id_kelas', $id)->get();


        $tgl = [];
        foreach ($absen as $date) {
            $tgl[] = $date->tanggal;
        }

        $t = array_unique($tgl);
        return view('daftarabsen.listtanggal', compact('t', 'guru', 'absen', 'ab'));
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
