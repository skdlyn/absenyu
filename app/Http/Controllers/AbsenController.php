<?php

namespace App\Http\Controllers;
use App\Models\Absen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AbsenController extends Controller
{
    public function index(){
        $kelas = Kelas::paginate(10);
        $data = absen::all();
        return view('rekapdata', compact('kelas', 'absen'));
    }
    // public function show($id){
    //     $resource = Kelas::find($id);
    //     return view('absensi',['resource'=>$resource]);
    // }
    public function store(Request $request){
       
        for($i=0;$i<count($request->siswa);$i++){
            
            $check = Absen::where(['id_siswa' => $request->siswa[$i],'id_kelas' => $request->kelas, 'tanggal' => Carbon::now('Asia/Jakarta')->format('Y-m-d')])->get();
            if(count($check)==0 && $request->status[$i] != "Hadir"){
                $absen = new Absen;
                $absen->id = $request->siswa[$i];
                $absen->id = $request->kelas;
                $absen->tanggal = Carbon::now('Asia/Jakarta')->format('Y-m-d');
                $absen->status = $request->status[$i];
                $absen->keterangan = $request->status[$i];
                $absen->save();

                Session::flash('berhasil', 'Selamat!!! Data Anda Berhasil Diupdate');
                return redirect('listkelas');

            }


        }
        return redirect('/absen');
    }
}
