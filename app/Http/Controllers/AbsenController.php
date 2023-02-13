<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\User;
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
        // return $kelas;
        return view('absen.absen', compact('kelas'));
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $data = [
        //     'id_siswa' => $request->id_siswa,
        //     'status' => $request->status
        // ];

        // // foreach


        // for ($i = 0; $i < count($data['id_siswa']); $i++) {
        //     // insert tabel absen
        //     absen::insert([
        //         'tanggal' => $request->tanggal,
        //         'id_kelas' => $request->id_kelas,
        //         'id_siswa' => $data['id_siswa'][$i],
        //         'status' => $data['status'][$i]
        //     ]);
        // };

        $d = [
            'siswa' => $request->user_id,
            'status' => $request->status
        ];

        for ($i = 0; $i < count($d['']); $i++){
            absen::create([
                'tanggal' => $request->tanggal,
                'kelas' => $request->kelas_id,
                'siswa' => $request->user_id,
                'status' => $d['status'][$i]
            ]);
        }

        return $d;
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
        // $guru = kelas::where('guru_id', $id)->with('guru')->get();
        // $siswa = siswa::where('kelas_id', $id)->get();
        // $total = siswa::where('kelas_id', $id)->count();
        $guru = user::where('role', 'guru')->where('kelas_id', $id)->get();
        $siswa = user::where('role', 'siswa')->where('kelas_id', $id)->get();
        $total = user::where('role', 'siswa')->where('kelas_id', $id)->count();
        // return $guru;
        $today = today()->format("Y-m-d");
        // $absen = absen::where('kelas_id', $id)->orderby('tanggal', 'desc')->first('tanggal');

        // if ($absen == null) {
        //     return view('absen.absenkelas', compact('siswa', 'guru', 'total'));
        // }
        // if ($absen->tanggal == $today) {
        //     return redirect()->back()->with('status', 'kamu sudah absen');
        // }
        return view('absen.absenkelas', compact('siswa', 'guru', 'total'));
    }

    public function listabsen($id)
    {
        $guru = kelas::where('guru_id', $id)->with('guru')->get();
        $siswa = siswa::where('kelas_id', $id)->get();
        $total = siswa::where('kelas_id', $id)->count();
        return $guru;
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
}
