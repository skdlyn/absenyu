@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    {{-- <div class="row">
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
                                {{ Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') }}
                            </div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <form method="POST" action="{{ route('absen.store') }}">
                    @csrf
                    {{-- <div class="card-body">
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="date" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                value="{{ old('tahun_masuk') }}">
                        </div>
                    </div> --}}

                    {{-- <div class="col-xl-3 col-md-6 md-6 mb-4"> --}}
                        <div class="card border-left-primary  h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="form-group">
                                            <label for="tahun_masuk">Tahun Masuk</label>
                                            <input type="date" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                                value="{{ old('tahun_masuk') }}">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    {{-- </div> --}}

                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $i => $item)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nisn }}</td>

                                            <td>
                                                @if ($loop->last)
                                                    <div class="form-group">
                                                        <input type="radio" id="hadir"
                                                            name="status{{ $item }}" value="hadir">
                                                        hadir
                                                        <input type="radio" id="alfa"
                                                            name="status{{ $item }}" value="alfa">
                                                        alfa
                                                        <input type="radio" id="izin"
                                                            name="status{{ $item }}" value="izin">
                                                        izin
                                                        <input type="radio" id="sakit"
                                                            name="status{{ $item }}" value="sakit">
                                                        sakit
                                                    </div>
                                                @else
                                                    <div class="status-diselected">
                                                        <input type="radio" id="hadir"
                                                            name="status{{ $item }}" value="hadir">
                                                        hadir
                                                        <input type="radio" id="alfa"
                                                            name="status{{ $item }}" value="alfa">
                                                        alfa
                                                        <input type="radio" id="izin"
                                                            name="status{{ $item }}" value="izin">
                                                        izin
                                                        <input type="radio" id="sakit"
                                                            name="status{{ $item }}" value="sakit">
                                                        sakit
                                                    </div>
                                                @endif
                                                {{-- diff --}}
                                                {{-- @if ($loop->last)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Default radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Default checked radio
                                                        </label>
                                                    </div>
                                                @else
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Default radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Default checked radio
                                                        </label>
                                                    </div>
                                                @endif --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                {{-- <a href=""type="button" class="btn btn-danger">Batal</a> --}}
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
