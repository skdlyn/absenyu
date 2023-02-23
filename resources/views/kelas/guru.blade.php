@extends('admin.body')
@section('title', 'Data Guru')
@section('content-title')
@section('content')
    @if ($message = Session::get('input_guru'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('update_guru'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('hapus_guru'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Wali Kelas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('guru.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name='nama'
                                            value="{{ old('nama') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name='nip'
                                            value="{{ old('nip') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-select form-control" id="jenis_kelamin" name='jenis_kelamin'
                                            value="{{ old('jenis_kelamin') }}">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="{{ route('guru.index') }}"type="button" class="btn btn-danger">Batal</a>
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped ">
                        <thead class="text-white" style="background-color: #6b5b95">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $i => $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->nomor_induk }}</td>
                                    <td>{{ $item->kelas->nama_kelas }} </td>
                                    <td>{{ $item->jenis_kelamin }} </td>
                                    <td>
                                        <a type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#show{{$item->id}}" data-whatever="@mdo"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    {{-- modal show data guru --}}
    @foreach ($guru as $detail)
        <div class="modal fade" id="show{{$detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">INFORMASI DETAIL GURU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                Nama Guru
                            </div>
                            <div class="col">
                                : {{$detail->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Kelas
                            </div>
                            <div class="col">
                                : {{$detail->kelas->nama_kelas}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                NIP
                            </div>
                            <div class="col">
                                : {{$detail->nomor_induk }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Alamat
                            </div>
                            <div class="col">
                                : {{$detail->alamat }}
                            </div>
                        </div
                        {{-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NAMA</label>
                            <input type="text" class="form-control" id="recipient-name" disabled value="{{$detail->name}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NIP</label>
                            <input type="text" class="form-control" id="recipient-name" disabled value="{{$detail->nomor_induk}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">KELAS</label>
                            <input type="text" class="form-control" id="recipient-name" disabled value="{{$detail->kelas->nama_kelas}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ALAMAT</label>
                            <input type="text" class="form-control" id="recipient-name" disabled value="{{$detail->alamat}}">
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach


@endsection
