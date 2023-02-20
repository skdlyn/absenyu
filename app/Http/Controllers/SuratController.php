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
        // $s = absen::where('status','sakit')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        // $i = absen::where('status','izin')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        $stat = absen::where('status','izin')->orwhere('status','sakit')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        $kelas = kelas::find($id);
        // return $stat;
        // dd($stat);
        return view('absen.uploadsurat', compact('stat','kelas'));
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
        // $update =
        $today = today();
        $stat = absen::where('status','izin')->orwhere('status','sakit')->where('kelas_id',$id)->where('tanggal',$today)->with('user')->get();
        // $eo =$stat->update($request->all());
        // return $request;
        
        
        $file = $request->file('surat');
        return $file;

        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload, $nama_file);

        return $nama_file;

        return view('absen.hasil');
        // $i->update($req->);
        
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
