<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Session;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = Kelas::paginate(4);
        return view('listkelas', ['resource'=>$resource]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $check = Kelas::where(['tingkat_kelas' => $request->tingkat_kelas, 'jurusan' => $request->jurusan, 'nama_kelas' => $request->nama_kelas, 'tahun_masuk' => $request->tahun_masuk, 'tahun_keluar' => $request->tahun_keluar])->get();
        if($check->count()>0){
            Session::flash('success', 'Selamat!!! Project Anda Berhasil Ditambahkan');
            return redirect('listkelas');
        }
        else{
            $Kelas = new Kelas;
            $Kelas->tingkat_kelas = $request->tingkat_kelas;
            $Kelas->jurusan = $request->jurusan;
            $Kelas->nama_kelas = $request->nama_kelas;
            $Kelas->kuota = $request->kuota;
            $Kelas->tahun_masuk = $request->tahun_masuk;
            $Kelas->tahun_keluar = $request->tahun_keluar;
            if($Kelas->save()){
                Session::flash('benar', 'Selamat!!! Data Anda Berhasil Ditambahkan');
            }
            else{
                Session::flash('gagal', 'Maaf!!! Data anda tidak dapat ditambahkan, silahkan ulangi!!!');
            }
            return redirect('listkelas');
        }

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
