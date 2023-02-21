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
                    <h5>NAMA SISWA : {{ $user->name }}</h5>
                    <h5>NISN : {{ $user->nomor_induk }}</h5>
                    <h5>JENIS KELAMIN : {{ $user->jenis_kelamin }}</h5>
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
                                        <td scope="row">{{ $m }}</td>
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
                        <th scope="col">HADIR</th>
                        <th scope="col">IZIN</th>
                        <th scope="col">SAKIT</th>
                        <th scope="col">ALPHA</th>
                    </tr>
                </thead>
                <th>{{ $h }}</th>
                <th>{{ $iz }}</th>
                <th>{{ $sk }}</th>
                <th>{{ $a }}</th>
             </table>
        </div>
    </div>
</body>

</html>
