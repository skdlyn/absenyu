@extends('layout.admin')
@section('title', 'Data Siswa')
@section('content-title')
@section('content')

<div class="row">
    <ol class="breadcrumb">
        <li><a href="/dashboard"><em class="fa fa-home"></em></a> Data Siswa</li>
        {{-- <li class="active">  Dashboard</li> --}}
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-white" style="background-color: #6b5b95">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NISN</th>
                            <th scope="col">KELAS</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($siswa as $i => $item)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->id_kelas }}</td>
                                <td>{{ $item->alamat }} </td>
                                <td>{{ $item->jk }} </td>
                                <td>
                                    <a href="{{ route('datasiswa.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('datasiswa.hapus', $item->id) }}"
                                        class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                        
                                    </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
                <a href="/cetakpdf"
                class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection