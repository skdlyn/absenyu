<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Absen;


class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas = Kelas::all();
        return view('absen.hasil', compact('kelas'));
    
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

    public function cetak(Request $id)
    {
        // return request();
        // dd($id);
        $siswa = User::where('role', 'siswa')->where('kelas_id', $id)->with('absen')->get();
        foreach ($siswa as $s) {
            $sis[]=$s;
        }
        return $sis;

        $tanggal = today()->format('Y m d');

        // return view('pdfsiswa', compact('user'));
        $data = Absen::all();
        view()->share('data', $data);
        // return $tanggal;
        $pdf = 'PDF'::loadview('pdfkelas', compact('user', 'h', 'i', 'sk', 'a', 'tanggal', 'siswa'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    
    }
    
    public function kelas($id)
    {
        $k = Kelas::find($id);
        return redirect('liskelassurat', compact('k'));
    }
}
