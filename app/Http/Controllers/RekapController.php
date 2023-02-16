<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AbsensiController;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Absen;
use App\Models\Rekap;
use PDF;

class RekapController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('rekaplist', compact('kelas'));
    }
    public function show($table)
    {
        if ($table == "kelas") {
            $resource = Kelas::get();
            return view('datakelas', ['resource' => $resource]);
        }
    }
    public function pdf(Request $request)
    {
        $resource = Kelas::find($request->id);
        foreach ($resource->siswa as $index => $res) {
            $alfa = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Alfa');
            $izin = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Izin');
            $sakit = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Sakit');
            if ($request->tanggal_awal != 0) {
                $alfa = $alfa->where('tanggal', '>=', $request->tanggal_awal);
                $izin = $izin->where('tanggal', '>=', $request->tanggal_awal);
                $sakit = $sakit->where('tanggal', '>=', $request->tanggal_awal);
            }
            if ($request->tanggal_akhir != 0) {
                $alfa = $alfa->where('tanggal', '<=', $request->tanggal_akhir);
                $izin = $izin->where('tanggal', '<=', $request->tanggal_akhir);
                $sakit = $sakit->where('tanggal', '<=', $request->tanggal_akhir);
            }
            $alfa = $alfa->get();
            $izin = $izin->get();
            $sakit = $sakit->get();
        }
        if ($request->tgl_awal == $request->tgl_akhir || $request->tgl_awal == "" || $request->tgl_akhir == "") {
            $tanggal = "-";
        } else {
            $tanggal = DATE('d F Y', strtotime($request->tgl_awal)) . " / " . DATE('d F Y', strtotime($request->tgl_akhir));
        }
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->setPaper('A4', 'potrait');
        // $pdf->loadHTML(view("layouts.pribadipdf",['resource'=>$resource, 'tanggal'=>$tanggal, 'alfa'=>$alfa,'izin'=>$izin,'sakit'=>$sakit]));
        // return $pdf->stream();
    }

    public function indexabsen()
    {
        $absen = Absen::all();
        return view('rekapdata', compact('absen'));
    }

    public function cetakpdf()
    {
        $data = Absen::all();
        view()->share('data', $data);
        $pdf = 'PDF'::loadview('cetak');
        return $pdf->stream('Data Siswa.pdf');
    }

    public function rekap($id)
    {
        $resource = Kelas::find($id);
        return view('admin/rekapAbsen', ['resource' => $resource]);
    }


    public function hitung(Request $request)
    {
        $resource = Kelas::find($request->id);
        foreach ($resource->siswa as $index => $res) {
            $alfa = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Alfa');
            $izin = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Izin');
            $sakit = Absen::where(['siswa_id' => $res->id_siswa])->where('status', 'Sakit');
            if ($request->tanggal_awal != 0) {
                $alfa = $alfa->where('tanggal', '>=', $request->tanggal_awal);
                $izin = $izin->where('tanggal', '>=', $request->tanggal_awal);
                $sakit = $sakit->where('tanggal', '>=', $request->tanggal_awal);
            }
            if ($request->tanggal_akhir != 0) {
                $alfa = $alfa->where('tanggal', '<=', $request->tanggal_akhir);
                $izin = $izin->where('tanggal', '<=', $request->tanggal_akhir);
                $sakit = $sakit->where('tanggal', '<=', $request->tanggal_akhir);
            }
            $alfa = $alfa->get();
            $izin = $izin->get();
            $sakit = $sakit->get();
?>
            <tr>
                <td class="text-center"><?php echo $index + 1 ?></td>
                <td><?php echo $res->nis ?></td>
                <td><?php echo $res->nama ?></td>
                <td><?php echo count($alfa) ?></td>
                <td><?php echo count($izin) ?></td>
                <td><?php echo count($sakit) ?></td>
            </tr>
<?php

        }
    }
}
