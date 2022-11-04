<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::all();
        $guru = guru::all();
        return view('datakelas', compact('kelas', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $guru = guru::all();
        // return view('datasiswa', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi gaess',
            'min' => ':attribute minimal :min karakter ya coy',
            'max' => 'attribute makasimal :max karakter gaess',
        ];

        $this->validate($request, [
            'nama_kelas' => 'required|min:7|max:30',
            'kuota' => 'required|numeric',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'id_guru' => 'required',
        ], $message);

        //insert data
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kuota' => $request->kuota,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'id_guru' => $request->id_guru,
        ]);

        Session::flash('success', 'Selamat!!! Data Anda Berhasil Ditambahkan');
        return redirect('/datakelas');
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
        return view('editkelas');
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

    public function hapus($id)
    {
        Kelas::find($id)->delete();
        Session::flash('danger', 'Data Berhasil Dihapus');
        return redirect('datakelas');
    }
}
