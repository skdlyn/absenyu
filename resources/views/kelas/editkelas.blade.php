@extends('layout.admin')
@section('title', 'Data Siswa')
@section('content-title')
@section('content')

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('datakelas.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name='nama_kelas' value="{{ $kelas->nama_kelas }}">
            </div>
            <div class="form-group">
                <label for="kuota">Kuota Siswa</label>
                <input type="text" class="form-control" id="kuota" name='kuota' value="{{ $kelas->kuota }}">
            </div>
            <div class="form-group">
                {{-- <input type="hidden" name="siswa_id" value="{{ $siswa->id }}"> --}}
                <label for="id_guru">Wali Kelas</label>
                <select class="form-select form-control" id="id_guru" name='id_guru'>
                    <option value="">Pilih Nama Wali Kelas</option>
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="date" class="form-control" id="tahun_masuk" name="tahun_masuk"
                    value="{{ $kelas->tahun_masuk }}">
            </div>
            <div class="form-group">
                <label for="tahun_keluar">Tahun Keluar</label>
                <input type="date" class="form-control" id="tahun_keluar" name="tahun_keluar"
                    value="{{ $kelas->tahun_keluar }}">
            </div>
            <div class="modal-footer">
                <a href="/datakelas" type="button" class="btn btn-danger">Batal</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>

@endsection
