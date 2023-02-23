@extends('admin.body')
@section('title', 'daftar absen')
@section('content-title')
@section('content')

<h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-dark">Riwayat Absen</h3>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead class="text-white" style="background-color: #6b5b95">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">WALI KELAS</th>
                                <th scope="col">TAHUN MASUK</th>
                                <th scope="col">TAHUN KELUAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $item )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a href="{{ route('list.show',$item->kelas->id) }}">{{ $item->kelas->nama_kelas}}</a></td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->kelas->tahun_masuk }}</td>
                                    <td>{{ $item->kelas->tahun_keluar }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
