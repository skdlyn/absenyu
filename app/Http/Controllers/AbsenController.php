<?php

namespace App\Http\Controllers;
use App\Models\Absen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    // public function index(){
    //     $resource = Kelas::paginate(10);
    //     return view('absensi/listkelas', ['resource'=>$resource]);
    // }
    // public function show($id){
    //     $resource = Kelas::find($id);
    //     return view('absensi',['resource'=>$resource]);
    // }
    public function store(Request $request){
       
        for($i=0;$i<count($request->siswa);$i++){
            
            $check = Absen::where(['id_siswa' => $request->siswa[$i],'id_kelas' => $request->kelas, 'tanggal' => Carbon::now('Asia/Jakarta')->format('Y-m-d')])->get();
            if(count($check)==0 && $request->status[$i] != "Hadir"){
                $absen = new Absen;
                $absen->siswa_id = $request->siswa[$i];
                $absen->kelas_id = $request->kelas;
                $absen->tanggal = Carbon::now('Asia/Jakarta')->format('Y-m-d');
                $absen->status = $request->status[$i];
                $absen->keterangan = $request->status[$i];
                $absen->save();

                Session::flash('berhasil', 'Selamat!!! Data Anda Berhasil Diupdate');
                return redirect('absen');

            }


        }
        return redirect('/absen');
    }
}
