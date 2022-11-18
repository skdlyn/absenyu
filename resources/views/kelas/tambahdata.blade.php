@extends('layout.admin')
@section('title', 'Master Siswa')
@section('content-title', 'Daftar Siswa')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                </div>
                                <div class="modal-body">Anda Yakin Ingin Meninggalkan Aplikasi?</div>
                                <form method="post" enctype="multipart/form-data" action="{{ route('datasiswa.store') }}">
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

                                    <div class="form-group">
                                        {{-- <a type="submit" class="btn btn-success">Simpan</a> --}}
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <a href="{{ route('datasiswa.index') }}" class="btn btn-danger">Batal</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
