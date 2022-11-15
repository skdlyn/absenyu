<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use PDF;
class SiswaController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kelas = kelas::all();
        // $siswa= siswa::all();
        // return view('datasiswa', compact('siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kelas = kelas::all();
        // return view('datasiswa', compact('siswa', 'kelas'));
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
            'numeric' => ':attribute kudu diisi angka cak!!'
        ];

        $this->validate($request, [
            'nama' => 'required|min:7|max:30',
            'nisn' => 'required|numeric',
            'kelas' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ], $message);

        // siswa::create([
        //     'nama' => $request->nama,
        //     'nisn' => $request->nisn,
        //     'kelas' => $request->kelas,
        //     'alamat' => $request->alamat,
        //     'jk' => $request->jk
        // ]);

        // return redirect('');
        
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
        $guru = guru::all();
        $kelas = kelas::all();
        $siswa = siswa::find($id);
        return view ('editsiswa' ,compact('guru', 'siswa','kelas'));
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
