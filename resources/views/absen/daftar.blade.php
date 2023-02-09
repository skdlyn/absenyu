@extends('layout.admin')
@section('title', 'daftar absen')
@section('content-title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">WALI KELAS</th>
                                <th scope="col">TAHUN MASUK</th>
                                <th scope="col">TAHUN KELUAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $i => $item)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td><a href="{{ route('list.show',$item->id) }}">{{ $item->nama_kelas }}</a></td>
                                    <td>{{ $item->guru->nama }} </td>
                                    <td>{{ $item->tahun_masuk }}</td>
                                    <td>{{ $item->tahun_keluar }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
