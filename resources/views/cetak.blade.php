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

    <h2>HTML Table</h2>

    <table class="table table-bordered">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">NISN</th>
                <th scope="col">KELAS</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">JENIS KELAMIN</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</body>

</html>
