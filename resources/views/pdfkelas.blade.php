<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>


    <center>
        <h1 style="font-family:Arial, Helvetica, sans-serif" class="text-center">Rekap Absensi Siswa</h1>
        <hr>
    </center>

    <div class="container">
        <div class="row">
            <div class="col text-start">
                <div class="card">
                    <h5>NAMA KELAS : XII RPL 1</h5>
                    <h5>WALI KELAS : ASMU'IN</h5>
                    <h5>JUMLAH SISWA : 38 SISWA</h5>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th style="background-color:gray">Bulan</th>
                                        <th style="background-color: gray">Tanggal Cetak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"></td>
                                        <td>{{ $tanggal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NAMA SISWA</th>
                        <th scope="col">HADIR</th>
                        <th scope="col">IZIN</th>
                        <th scope="col">SAKIT</th>
                        <th scope="col">ALPHA</th>
                    </tr>
                </thead>
                @foreach ($user as $u)
                    {{-- @dd($u) --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ App\Models\Absen::where('siswa_id', $u->id)->where('status', 'hadir')->count() }}</td>
                        <td>{{ App\Models\Absen::where('siswa_id', $u->id)->where('status', 'alpha')->count() }}</td>
                        <td>{{ App\Models\Absen::where('siswa_id', $u->id)->where('status', 'sakit')->count() }}</td>
                        <td>{{ App\Models\Absen::where('siswa_id', $u->id)->where('status', 'izin')->count() }}</td>
                    </tr>
                @endforeach
                {{-- @foreach ($siswa as $i)
                <tr>
                    <td>{{ $i }}</td>
                </tr>
                @endforeach --}}
            </table>
        </div>
    </div>
</body>

</html>
