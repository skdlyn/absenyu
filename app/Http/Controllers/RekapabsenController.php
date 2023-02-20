<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;


class RekapabsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all();
        return view('rekapdata', compact('absen'));
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
    public function cetakpdf()
    {
        $today = today();
        $dates = [];
        $user = auth()->user();
        $h = Absen::where('siswa_id', $user->id)->where('status', 'hadir')->count();
        $i = Absen::where('siswa_id', $user->id)->where('status', 'izin')->count();
        $sk = Absen::where('siswa_id', $user->id)->where('status', 'sakit')->count();
        $a = Absen::where('siswa_id', $user->id)->where('status', 'alpha')->count();

        $today = today();
        $dates = [];
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $d[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('d');
            $m = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('m');
            $y = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y');
            // eak

        }

        $tanggal = \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y');

        // return view('pdfsiswa', compact('user'));
        $data = Absen::all();
        view()->share('data', $data);
        $pdf = 'PDF'::loadview('pdfsiswa', compact('user', 'h', 'i', 'sk', 'a', 'm', 'tanggal'));
        return $pdf->stream();
    }
}
