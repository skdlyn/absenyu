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
                    <h5>NAMA SISWA : {{ $u->name }}</h5>
                    <h5>NISN : {{ $u->nomor_induk }}</h5>
                    <h5>JENIS KELAMIN : {{ $u->jenis_kelamin }}</h5>
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
                                        <td scope="row">Januari</td>
                                        <td>20 2020</td>
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
                        <th scope="col">NO</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">JENIS KELAMIN</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>

</html>
