<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
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
        $kelas = Kelas::all();
        return view('rekaplist', compact('kelas'));
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
        // return true;
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
        $iz = Absen::where('siswa_id', $user->id)->where('status', 'izin')->count();
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

        // return $sk;
        // return $i;
        // return view('pdfsiswa', compact('user'));
        $data = Absen::all();
        view()->share('data', $data);
        $pdf = 'PDF'::loadview('pdfsiswa', compact('user', 'h', 'iz', 'sk', 'a', 'm', 'tanggal'));
        return $pdf->stream();
    }

    public function t($request)
    {
        return $request;
        return redirect()->route('pdfkelas');
    }

    public function pdfkelas($kls)
    {
        // return $kls;
        // $user = User::where('kelas_id', $id);
        $user = user::where('role', 'siswa')->where('kelas_id', $kls)->with('absen')->get();
        // $user = user::where('role','siswa')->where('kelas_id', $kls)->where('siswa_id','4')->with('absen')->get();
        // return $user;
        // foreach ($user as $us) {
        //     // $ua[] = $us->id;
        //     // $siswa[] = [
        //     //     $us,
        //     //     // $h[] = Absen::where('siswa_id', $us->id)->where('status', 'hadir')->count(),
        //     //     // $i[] = Absen::where('siswa_id', $us->id)->where('status', 'izin')->count(),
        //     //     // $sk[] = Absen::where('siswa_id', $us->id)->where('status', 'sakit')->count(),
        //     //     // $a[] = Absen::where('siswa_id', $us->id)->where('status', 'alpha')->count()
        //     //     // // return $ua;
        //     // ];

        // }
        // return $h;
        // $ass = $h->count;
        // return $siswa;
        // dd($siswa);
        // $h = Absen::where('siswa_id', $ua)->where('status', 'hadir')->count();
        // $i = Absen::where('siswa_id', $ua)->where('status', 'izin')->count();
        // $sk = Absen::where('siswa_id', $ua)->where('status', 'sakit')->count();
        // $a = Absen::where('siswa_id', $ua)->where('status', 'alpha')->count();
        // $coba = Absen::where('siswa_id', '8')->where('status', 'alpha')->count();
        // $c = '4';
        // $i = 'a';
        // $sk = 'a';
        // return $coba;
        // $u = $user->id;
        // return $ua;
        // $h = Absen::where('siswa_id', $user->id)->where('status', 'hadir')->count();
        // foreach($user as $s){
        //     $sat[] /=
        // }

        // return $sat;
        $tanggal = today()->format('Y m d');
        $bulan = today()->format('F');
        // return $bulan;
        // $kelas = kelas::where('id',$kls)->with('user')->get();
        $guru = user::where('kelas_id',$kls)->where('role','guru')->with('kelas')->get();
        // return $guru;
        // return view('pdfsiswa', compact('user'));

        // return $tanggal;
        // $pdf = 'PDF'::loadview('pdfkelas', compact('tanggal', 'user', 'h', 'i', 'sk', 'a', 'siswa'))->setPaper('a4', 'landscape');
        $pdf = 'PDF'::loadview('pdfkelas', compact('tanggal', 'user','guru','bulan'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
