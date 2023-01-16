<?php

namespace App\Http\Controllers;

use illuminate\Support\facades\session;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.showkelas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('kelas.tambahsiswa', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg =[
            'req' => ':attribute harus diisi'
        ];

        $this->validate($request,[
            'nisn' =>'required',
            'nama' =>'required',
            'id_kelas' =>'required',
            'jk' =>'required',
            'alamat' =>'required'
        ], $msg);


        $cs = siswa::create([
            'nisn' => $request->nisn ,
            'nama' => $request->nama ,
            'id_kelas' => $request-> id_kelas,
            'jk' => $request->jk,
            'alamat' => $request-> alamat
        ]);

        // session::flash('siswa_simpan','Data Siswa berhasil Disimpan');
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::find($id);
        return view('kelas.showsiswa', compact('siswa'));
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
        $siswa = siswa::find($id);
        return view('kelas.editsiswa', compact('siswa'));
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
        $msg = [
            'req' => ':attribute harus diisi'
        ];

        $this->validate($request, [
            'nisn' => 'req',
            'nama' => 'req',
            'alamat' => 'req',
            'id_kelas' => 'req',
            'jk' => 'req'
        ], $msg);

        $siswa = siswa::find($id);
        $siswa->nisn =$request ->nisn;
        $siswa-> nama = $request->nama;
        $siswa-> alamat = $request->alamat;
        $siswa-> id_kelas = $request->id_kelas;
        $siswa-> jk = $request->jk;
        $siswa -> save();

        session::flash('updatesiswa', 'Data Siswa Berhasil Di Update');
        return redirect('datakelas');
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

    public function hapus($id){
        siswa::find($id)->delete();
        // session::flash('hapus', 'Data Siswa Berhasil Di Hapus');
        return back();
    }
}
