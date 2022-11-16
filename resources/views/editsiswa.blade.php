@extends('layout.admin')
@section('title', 'Data Siswa')
@section('content-title')
@section('content')

    <h1>awokawokwao</h1>
    @extends('layout.admin')
@section('title', 'Data Siswa')
@section('content-title')
@section('content')

    <div class="card-body">
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="nama" name='nama' value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <label for="nisn">Nisn</label>
                <input type="text" class="form-control" id="nisn" name='nisn' value="{{ old('nisn') }}">
            </div>
            <div class="form-group">
                {{-- <input type="hidden" name="siswa_id" value="{{ $siswa->id }}"> --}}
                <label for="kelas_id">Kelas</label>
                <select class="form-select form-control" id="id_kelas" name='id_kelas'>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-select form-control" id="jk" name='jk' value="{{ old('jk') }}">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
            </div>
            <div class="card-footer">
                <a href="{{ route('datasiswa.index') }}"type="button" class="btn btn-danger">Batal</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>

@endsection
