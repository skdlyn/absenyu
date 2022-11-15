@extends('layout.admin')
@section('title', 'Data Siswa')
@section('content-title', 'Data Siswa')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('berhasil'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard"><em class="fa fa-home"></em></a> Data Siswa</li>
            {{-- <li class="active">  Dashboard</li> --}}
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever>Tambah Data</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('datasiswa.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name='nama'
                                            value="{{ old('nama') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nisn">Nisn</label>
                                        <input type="text" class="form-control" id="nisn" name='nisn'
                                            value="{{ old('nisn') }}">
                                    </div>
                                    <div class="form-group">
                                        {{-- <input type="hidden" name="siswa_id" value="{{ $siswa->id }}"> --}}
                                        <label for="id_kelas">Kelas</label>
                                        <select class="form-select form-control" id="id_kelas" name='id_kelas'>
                                            <option value="">Pilih Kelas</option>
                                            @foreach ($kelas as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select class="form-select form-control" id="jk" name='jk'
                                            value="{{ old('jk') }}">
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{ old('alamat') }}">
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <a href="{{ route('datasiswa.index') }}"type="button"
                                            class="btn btn-danger">Batal</a>
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">NISN</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
