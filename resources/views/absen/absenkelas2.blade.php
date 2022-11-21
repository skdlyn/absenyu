@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    <div class="row">
        <div class="col-xl-3 col-md-6 md-6 mb-4">
            <div class="card border-left-primary  h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                kelas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @foreach ($guru as $g)
                                    {{ $g->nama_kelas }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6 mb-4">
            <div class="card border-left-success  h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Wali Kelas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @foreach ($guru as $g)
                                    {{ $g->guru->nama }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6 mb-4">
            <div class="card border-left-dark  h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total siswa
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $total }}
                            </div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 md-6 mb-4">
            <div class="card border-left-info  h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tanggal
                            </div>
                            {{-- <form action="{{ route('absen.store') }}" method="post">
                                @csrf
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div> --}}
                            {{-- </form> --}}
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever>Tambah
                    Data</button> --}}
                <div class="card-body">
                    {{-- datepicker --}}


                    {{-- <form action="{{ route('absen.store') }}" method="post">
                        @csrf --}}
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $i => $item)
                                <form action="{{ route('absen.store') }}" method="post">
                                    @csrf
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <input type="hidden" name="tanggal" id="tanggal">
                                        <td>
                                            {{ $item->nama }}
                                            <input type="hidden" name="id_siswa" id="id_siswa"
                                                value="{{ $item->id }}">
                                        </td>
                                        <td>
                                            @if ($loop->last)
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="hadir" value="hadir"
                                                            checked>
                                                        <label class="form-check-label" for="hadir">
                                                            Hadir
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="alpha" value="alpha">
                                                        <label class="form-check-label" for="alpha">
                                                            Alpha
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="sakit" value="sakit">
                                                        <label class="form-check-label" for="sakit">
                                                            Sakit
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="izin"
                                                            value="izin">
                                                        <label class="form-check-label" for="izin">
                                                            Izin
                                                        </label>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="hadir" value="hadir"
                                                            checked>
                                                        <label class="form-check-label" for="hadir">
                                                            Hadir
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="alpha"
                                                            value="alpha">
                                                        <label class="form-check-label" for="alpha">
                                                            Alpha
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="sakit"
                                                            value="sakit">
                                                        <label class="form-check-label" for="sakit">
                                                            Sakit
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="izin"
                                                            value="izin">
                                                        <label class="form-check-label" for="izin">
                                                            Izin
                                                        </label>
                                                    </div>


                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <select class="form-select form-control" id="status" name='status'
                                                    value="">
                                                    <option value="hadir">hadir</option>
                                                    <option value="alpha">alpha</option>
                                                    <option value="sakit">sakit</option>
                                                    <option value="izin">izin</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="d-flex flex-row-reverse">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" data-whatever>Simpan absen</button>
                        </div> --}}

                    <div class="form-group d-flex flex-row-reverse">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
                    {{-- modal validasi absen --}}
                    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="simpan">
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                </div>
            </div>
        </div>
    </div>


@endsection
