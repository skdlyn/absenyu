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

    <h4>Nama Siswa    : {{ $u->name }}</h4>
    <h4>Kelas         : {{ $u->kelas->nama_kelas}}</h4>
    <h4>Jenis Kelamin : {{ $u->jenis_kelamin}}</h4>

    <table class="table table-bordered">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">TANGGAL</th>
                <th scope="col">STATUS</th>
                <th scope="col">JENIS KELAMIN</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($data as $i => $item)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->id_kelas }}</td>
                    <td>{{ $item->alamat }} </td>
                    <td>{{ $item->jk }} </td>
                </tr>
            @endforeach
        </tbody> --}}
    </table>
</body>

</html>
