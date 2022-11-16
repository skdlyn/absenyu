@extends('layout.admin')
@section('title', 'Data Guru')
@section('content-title')
@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard"><em class="fa fa-home"></em></a> Daftar Kelas</li>
            {{-- <li class="active">  Dashboard</li> --}}
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading bg-primary text-white text-center">Daftar Kelas</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="absensi" class="table table-bordred table-striped">
                                <thead>
                                    <tr>
                                        <th width="3%" class="text-center">No</th>
                                        <th width="25%">Nama Kelas</th>
                                        <th width="5%" class="text-center">Jumlah Siswa</th>
                                        <th width="10%" class="text-center">Tahun Ajaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $index => $data)
                                        <tr>
                                            <td class="text-center">{{ ++$index  }}</td>
                                            @if ($data->nama_kelas > 1)
                                                <td><a href="{{ url('absen' . $data->id_kelas) }}">{{ $data->nama_kelas }}</a>
                                                </td>
                                            @else
                                                <td><a href="{{ url('absen' . $data->id_kelas) }}">{{ $data->jurusan }}</a></td>
                                            @endif
                                            <td class="text-center">{{ $data->kuota }}</td>
                                            <td class="text-center">{{ $data->tahun_masuk . '/' . $data->tahun_keluar }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pull-right">
                            {!! $kelas->render() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
