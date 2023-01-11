<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarAbsenController extends Controller
// {
//     public function list()
//     {
//         $kelas = Kelas::with('guru')->get();
//         $guru = guru::all();
//         // return $kelas   ;
//         return view('daftarabsen.daftar', compact('kelas', 'guru'));
//     }

//     public function index($id)
//     {

//         $tanggal = absen::where('id_kelas',$id)->get();
//         $date=[];
//         // return $tanggal;
//         // return $tgl;
//         foreach ($tanggal as $tgl) {
//             $date[] = $tgl->tanggal;
//         }
//         $d = array_unique($date);
//         // $d = $date;
//         // return $d;
//         // return $kelas;
//         // return date('Y-m-d');
//         return view('daftarabsen.listtanggal',compact('d'));

//     }

//     public function create($country_id)
//     {
//         return view('cities.create', compact('country_id'));
//     }

//     public function store($country_id, Request $request)
//     {
//         City::create($request->all() + ['country_id' => $country_id]);
//         return redirect()->route('countries.cities.index', $country_id);
//     }

//     public function edit($country_id, City $city)
//     {
//         return view('cities.edit', compact('country_id', 'city'));
//     }

//     public function update($country_id, Request $request, City $city)
//     {
//         $city->update($request->all());
//         return redirect()->route('countries.cities.index', $country_id);
//     }

//     public function show($id)
//     {
//         $kelas = kelas::all();
//         $tanggal = absen::where('id_kelas',$id)->with('tanggal')->get();
//         $date=[];
//         // return $tanggal;
//         // return $tgl;
//         // foreach ($tanggal as $tgl) {
//         //     $date[] = $tgl->tanggal;
//         // }


//         return $tanggal;


//     }

//     public function destroy($country_id, City $city)
//     {
//         $city->delete();
//         return redirect()->route('countries.cities.index', $country_id);
//     }
//}
{
    public function list()
    {
        $kelas = Kelas::with('guru')->get();
        $guru = guru::all();
        // return $kelas   ;
        return view('daftarabsen.daftar', compact('kelas', 'guru'));
    }

    public function index($id)
    {
        $siswa = siswa::where('id_kelas', $id)->get();
        $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $absen= Absen::where('id_kelas', $id)->get();
        $a = $absen;
        $stdnt=[];
        foreach($siswa as $std){
            $stdnt[]=absen::where('id_siswa',$std->id)->where('id_kelas',$id)->get();
        }
        
        
        $tgl= [];
        foreach($absen as $date){
        $tgl[]=$date->tanggal;    
        }

        $t = array_unique($tgl);
        return view('daftarabsen.listtanggal',compact('t','guru', 'absen','siswa','stdnt'));
    }

    public function create($id)
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {

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
