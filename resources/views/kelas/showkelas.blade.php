@extends('admin.body')
@section('header', 'Data Kelas')
@section('tab', 'List Rekap')

@section('content')

    <div class="row">
        <div class="col-xl-3 col-md-6 md-6">
            <div class="card border-left-primary ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kelas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @foreach ($guru as $g)
                                    {{ $g->kelas->nama_kelas }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6">
            <div class="card border-left-success ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Wali Kelas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @foreach ($guru as $g)
                                    {{ $g->name }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6">
            <div class="card border-left-dark ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total Siswa
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $total }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6">
            <div class="card border-left-info ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tanggal
                            </div>
                            <div class="mb-0 font-weight-bold text-gray-800">
                                {{ Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-calendar fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever>Tambah
                    Data</button> --}}
                <div class="card-body">
                    {{-- datepicker --}}


                    <table class="table">
                        <thead class="text-white" style="background-color: #6b5b95">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">NISN</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JENIS KELAMIN</th>
                                {{-- <th scope="col">ACTION</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $i => $item)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->nomor_induk }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    {{-- <td>
                                        <a href="{{ route('datasiswa.show', $item->id) }}" class="btn btn-sm btn-warning btn-circle" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('datasiswa.hapus', $item->id) }}"
                                            class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('datakelas.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_kelas" name='nama_kelas'
                                value="{{ $murid }}">
                        </div>
                        <div class="form-group">
                            <label for="nisn">Nisn</label>
                            <input type="text" class="form-control" id="nisn" name='nisn'
                                value="{{ $murid }}">
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select class="form-select form-control" id="id_kelas" name='id_kelas'>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-select form-control" id="jk" name='jk'
                                value="{{ old('jk') }}">
                                <option value="laki-laki" @if ($murid == 'laki-laki') selected @endif>Laki-laki
                                </option>
                                <option value="perempuan" @if ($murid == 'perempuan') selected @endif>Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ $murid }}" placeholder="alamat">
                        </div>

                        <div class="modal-footer">
                            <a href="" type="button" class="btn btn-danger">Batal</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}



@endsection
