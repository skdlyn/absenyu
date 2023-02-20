<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Kelas;
use App\Models\User;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kelas = kelas::all();
        // return $kelas;
        return view('absen.suratkelas', compact('kelas'));
        // $a = absen::where('status', 'izin')->get();
        // $n = absen::where('status', 'sakit')->get();
        // $s = [$a, $n];
        // // return $s;
        // return view('absen.uploadsurat', compact('s','a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return true;
        // return $id;

        // $a = absen::where('status','sakit')->where('kelas_id')->get();
        $today = today()->format("Y-m-d");
        // $coba = user::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        $s = absen::where('status','sakit')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        $i = absen::where('status','izin')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        // return $s;
        return view('absen.uploadsurat', compact('s','i'));
        
        // $s = user::where('role', 'siswa')->where('kelas_id', $id)->get();
        // $s = user::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        // // return $s;
        // foreach ($s as $as){
        //     $sts[] = $as;
        // }
        // $absen = absen::where('siswa_id', '4')->orderby('tanggal', 'desc')->first();
        // $today = today()->format("Y-m-d");
        // $coba = user::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        // foreach($coba as $c){
        //     $stats[] = [
        //         $sts[] = $c->absen,
        //     ];
        // }
        // return $sts;
        // return view('absen.uploadsurat',compact('sts'));

        // $as = absen::where('role', 'siswa')->where('siswa_id', $s->id)->get();
        // $absen = absen::where('siswa_id')->orderby('tanggal', 'desc')->get();

        // return $as;
        // return $s;
        // return $absen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $today = today()->format("Y-m-d");
        // // $coba = user::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        // $s = absen::where('status','sakit')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        // $i = absen::where('status','izin')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        // return $i;
        // return view('absen.uploadsurat', compact('s','i'));
        // // $stat = [$s, $i];
        // return $s;
        // $coba = user::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        // return $coba;
        // foreach ($coba as $c) {
        //     $stats[] = [
        //             $c->absen,
        //     ];
        // }
        // return $semp;
        // return $stats;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
