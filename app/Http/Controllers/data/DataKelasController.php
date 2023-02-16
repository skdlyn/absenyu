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

    // public function __construct($id)
    // {   
        
    // }

    public function index()
    {
        $id = Auth()->user()->id;
        $sg = kelas::where('id_guru',[0])->get();
        $kelas = kelas::with('guru')->get();
        $guru = guru::all();
        // return $id;
        // if(auth()->user()->role =='admin'){
        //     return view('kelas.datakelas', compact('kelas', 'guru'));
        // }
        // else{
        // return view('kelas.datakelas',compact('kelas','guru'));

        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // sudah pakai modal
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
        ];

        $this->validate($request, [
            'nama_kelas' => 'required',
            'kuota' => 'required',
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
        $siswa = siswa::where('id_kelas', $id)->get();
        $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $total = siswa::where('id_kelas', $id)->count();
        $kelas = kelas::all();
        $murid = siswa::find($id);
        // return $guru;
        return view('kelas.showkelas', compact('murid','siswa', 'guru', 'total','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::all();
        $pguru = kelas::where('id_guru', $id)->with('guru')->get();
        $kelas = kelas::find($id);
        return view('kelas.editkelas', compact('guru', 'kelas','pguru'));
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
        $message = [
            'required' => ':attribute harus diisi gaess',
        ];

        $this->validate($request, [
            'nama_kelas' => 'required',
            'kuota' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'id_guru' => 'required',
        ], $message);

        //insert data
        $kelas = kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kuota  = $request->kuota;
        $kelas->tahun_masuk  = $request->tahun_masuk;
        $kelas->tahun_keluar  = $request->tahun_keluar;
        $kelas->id_guru = $request->id_guru;
        $kelas->save();

        Session::flash('success', 'Selamat!!! Data Anda Berhasil Ditambahkan');
        return redirect('/datakelas');
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
        Session::flash('kelas', 'Data Kelas Berhasil Dihapus');
        return redirect('datakelas');
    }

}
