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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
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
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>
                                        {{ $item->nama }}
                                        <input type="hidden" name="siswa" value="{{ $item->id }}"> 
                                    </td>
                                    <td>
                                        <form action="{{ route('absen.store') }}" method="post">
                                            @if ($loop->last)
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}"  id="hadir" value="hadir" checked >
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
                                                            name="status {{ $item }}" id="izin" value="izin">
                                                        <label class="form-check-label" for="izin">
                                                            Izin
                                                        </label>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="status {{ $item }}" id="hadir" value="hadir" checked>
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
                                        </form>
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
