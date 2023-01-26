<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Siswa;
use Symfony\Contracts\Service\Attribute\Required;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::all();
        $siswa = siswa::all();
        return view('absen.absen', compact('kelas', 'siswa'));
    }

    public function tanggal(request $request)
    {

        for ($i = 0; $i < count($request->siswa); $i++) {

            $check = Absen::where(['id' => $request->siswa[$i], 'id' => $request->kelas, 'tanggal' => Carbon::now('Asia/Jakarta')->format('Y-m-d')])->get();
            if (count($check) == 0 && $request->status[$i] != "Hadir") {
                $absen = new Absen;
                $absen->id = $request->siswa[$i];
                $absen->id = $request->kelas;
                $absen->tanggal = Carbon::now('Asia/Jakarta')->format('Y-m-d');
                $absen->status = $request->status[$i];
                $absen->keterangan = $request->status[$i];
                $absen->save();

                // Session::flash('berhasil', 'Selamat!!! Data Anda Berhasil Diupdate');
                // return redirect('listkelas');
            }
        }

        // return redirect('absen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $guru = kelas::where('id_guru', $id)->with('guru')->get();
        // $siswa = siswa::where('id_kelas', $id)->get();
        // $total = siswa::where('id_kelas', $id)->count();
        // return view('absen.absenkelas', compact('siswa', 'guru', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'id_siswa' => $request->id_siswa,
            'status' => $request->status
        ];

        for ($i = 0; $i < count($data['id_siswa']); $i++) {
            // insert tabel absen
            absen::insert([
                'tanggal' => $request->tanggal,
                'id_kelas' => $request->id_kelas,
                'id_siswa' => $data['id_siswa'][$i],
                'status' => $data['status'][$i]
            ]);
        };

        return redirect('absen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $siswa = siswa::where('id_kelas', $id)->get();
        $total = siswa::where('id_kelas', $id)->count();
        $absen = absen::where('id_kelas', $id)->orderby('tanggal', 'desc')->first('tanggal');
        // return $absen;
        $today = today()->format("Y-m-d");
        
        if ($absen == null) {
            return view('absen.absenkelas', compact('siswa', 'guru', 'total'));
        }
        if ($absen->tanggal == $today) {
            return redirect()->back()->with('status', 'kamu sudah absen');
        }
        return view('absen.absenkelas', compact('siswa', 'guru', 'total'));
    }

    public function listabsen($id)
    {
        $guru = kelas::where('id_guru', $id)->with('guru')->get();
        $siswa = siswa::where('id_kelas', $id)->get();
        $total = siswa::where('id_kelas', $id)->count();
        // return $siswa;
        return view('absen.listabsen', compact('siswa', 'guru', 'total'));
    }


    public function list($id)
    {
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

    public function hapus($id)
    {
    }
}
