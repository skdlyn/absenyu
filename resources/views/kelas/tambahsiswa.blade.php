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

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('datasiswa.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name='nama'
                                        value="{{ old('nama') }}" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="nisn">Nisn</label>
                                    <input type="text" class="form-control" id="nisn" name='nisn'
                                        value="{{ old('nisn') }}" placeholder="nisn">
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
                                        value="" >
                                        <option value="laki - laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ old('alamat') }}" placeholder="alamat">
                                </div>

                                <div class="modal-footer">
                                    {{-- <a href="{{ route('datasiswa.index') }}"type="button" class="btn btn-danger">Batal</a> --}}
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
