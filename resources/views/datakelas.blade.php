    @extends('layout.admin')
    @section('title', 'Data Kelas')
    @section('content-title')
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
                <li><a href="/dashboard"><em class="fa fa-home"></em></a> Data Seluruh kelas</li>
                {{-- <li class="active">  Dashboard</li> --}}
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever>Tambah Kelas</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data"
                                        action="{{ route('datakelas.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_kelas">Nama Kelas</label>
                                            <input type="text" class="form-control" id="nama_kelas" name='nama_kelas'
                                                value="{{ old('nama_kelas') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kuota">Kuota Siswa</label>
                                            <input type="text" class="form-control" id="kuota" name='kuota'
                                                value="{{ old('kuota') }}">
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
                                                value="{{ old('tahun_masuk') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_keluar">Tahun Keluar</label>
                                            <input type="date" class="form-control" id="tahun_keluar" name="tahun_keluar"
                                                value="{{ old('tahun_keluar') }}">
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/datasiswa"type="button" class="btn btn-danger">Batal</a>
                                            <input type="submit" class="btn btn-success" value="Simpan">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">NO</th>
                                    {{-- <th scope="col">NAMA KELAS</th> --}}
                                    <th scope="col">KELAS</th>
                                    {{-- <th scope="col">JURUSAN</th> --}}
                                    <th scope="col">KUOTA</th>
                                    <th scope="col">WALI KELAS</th>
                                    <th scope="col">TAHUN MASUK</th>
                                    <th scope="col">TAHUN KELUAR</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        {{-- <td>{{ $item->nama_kelas }}</td> --}}
                                        {{-- <td><a href="{{ url('absen' . $item->id_kelas) }}">{{ $item->nama_kelas }}</a></td> --}}
                                        <td><a href="{{ url('showkelas/' . $item->id) }}">{{ $item->nama_kelas }}</a></td>
                                        {{-- <td></td> --}}
                                        <td>{{ $item->kuota }}</td>
                                        <td>{{ $item->guru->nama}} </td>
                                        <td>{{ $item->tahun_masuk }}</td>
                                        <td>{{ $item->tahun_keluar }}</td>
                                        <td>
                                            <a href="{{ route('datakelas.edit', $item->id) }}"
                                                class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('datakelas.hapus', $item->id) }}"
                                                class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
