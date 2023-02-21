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
        // return $id;
        // return 'bener';
        // return $request;  
        // return true;
        $today = today()->format("Y-m-d");
        // $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->with('user')->get();
        // $stat = absen::where('dokumen',null)->where('status','sakit')->where('status','izin')->get();
        $s = [
            'izin','sakit'
        ];
        // $stat = absen::where('dokumen',null)->where('status','sakit')->orwhere('status','izin')->get();
        // $stat = absen::where('status', 'izin')->where('dokumen',null)->where('kelas_id', $id)->
        // orwhere('status', 'sakit')->where('kelas_id', $id)->where('dokumen', null)->with('user')->get();
        $stat = absen::whereIn('status',$s)->where('dokumen',null)->where('tanggal', $today)->with('user')->get();
        // return $s;
        // $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->with('user');
        // $stat->where('dokumen',null)->where('kelas_id', $id)->where('dokumen', null)->where('tanggal', $today)->get();
        // return $stat;
        // dd($stat);
        // $s = absen::where('status', 'izin')->where('kelas_id',$id)->where('dokumen', null)->where('tanggal',$today)->with('user')->get();
        // $i = absen::where('status', 'sakit')->where('kelas_id',$id)->where('dokumen', null)->where('tanggal',$today)->with('user')->get();
        // return $stat;
        return view('absen.uploadsurat', compact('stat'));
    }

    public function surat($id)
    {
        // $today = today()->format("Y-m-d");
        // $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->where('kelas_id', $id)->where('tanggal', $today)->with('user')->get();
        // // $kelas = kelas::find($id);
        // return view('absen.uploadsurat', compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
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
        // $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->where('kelas_id', $id)->where('tanggal', $today)->with('user')->get();
        $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->where('tanggal', $today)->with('user')->get();
        // $stat = absen::where('status', 'izin')->orwhere('status', 'sakit')->with('user')->get();
        // // $eo =$stat->update($request->all());
        // return $request;


        $file = $request->file('surat');
        // return $file;

        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload, $nama_file);

        // return $id;
        // return $nama_file;
        // $u = absen::find($id);
    //    $u = absen::where('id',$id)->where('status', 'izin')->orwhere('status', 'sakit')->where('tanggal', $today)->with('user')->get();
       $u = absen::find($id);
        // return $u;
        // $u->update(
        //     $request->nama_file
        // );
        $u->update([
            'dokumen' => $nama_file
        ]);

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
