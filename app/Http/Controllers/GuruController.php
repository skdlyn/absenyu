<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $guru = Guru::all();
        $guru = user::where('role', 'guru')->with('kelas')->get();
        // return $guru;
        return view('kelas.guru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('guru');
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
            'nip' => 'required|min:1|max:255',
            'nama' => 'required|min:1|max:255',
            'jenis_kelamin' => 'required'
        ], $message);

        //insert data
        guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        Session::flash('input_guru', 'Wali Kelas berhasil Di data !!!');
        return redirect('guru');
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
        //
        $guru = user::find($id);
        return view('kelas.guru', compact('guru'));
        // $guru = user::where('role', 'guru')->with('kelas')->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = user::where('role', 'guru')->where('id', $id)->get();
        //    foreach ($guru as $g) {
        //     $nama = $g->name;
        //     $nomor = $g->nomor_induk; 
        //     $jk= $g->jenis_kelamin;
        //    }

        //    return $nomor_in;
        // return $guru;
        return view('editguru', compact('guru'));
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
            'required' => ":attribute harus diisi",
            'min' => ':attribute minimal :min karakter ya coy',
            'max' => 'attribute makasimal :max karakter gaess',
        ];

        $this->validate($request, [
            'nip',
            'nama',
            'jenis_kelamin'
        ], $msg);

        $guru = guru::find($id);
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->save();

        Session::flash('update_guru', 'Wali kelas Berhasil Di update!!!');
        return redirect('guru');
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
        $guru = Guru::find($id)->delete();
        Session::flash('hapus_guru', 'Wali kelas Berhasil Di hapus!!!');
        return redirect('guru');
    }
}
