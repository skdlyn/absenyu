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
                            </div> 
                        </form> --}}
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
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">STATUS</th>
                                    {{-- <th scope="col" id="header" class="d-flex align-middle">UPLOAD SURAT</th> --}}
                                </tr>
                            </thead>

                            <tbody>
                                {{-- <tr>
                                <td>lmao</td>
                                <td>banget</td>
                                <td>dek</td>
                            </tr> --}}
                                @foreach ($siswa as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>
                                            {{-- <div id="rates">
                                                        <input type="radio" id="r1" name="rate"
                                                            value="Fixed Rate"> Fixed Rate
                                                            <input type="radio" id="r2" name="rate"
                                                            value="Variable Rate"> Variable Rate
                                                        <input type="radio" id="r3" name="rate"
                                                            value="Multi Rate" checked="checked"> Multi Rate
                                                    </div> --}}

                                            {{-- @if ($loop->last)
                                                        <label class="radio-inline">
                                                            <input id="hadir" type="radio"
                                                                name="status[{{ $item }}]" value="Hadir"> Hadir
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                        </label>

                                                        <label class="radio-inline">
                                                            <input id="izin" type="radio"
                                                                name="status[{{ $item }}]" value="Izin"> Izin
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="sakit" type="radio"
                                                                name="status[{{ $item }}]" value="Sakit"> Sakit
                                                        </label>
                                                    @else --}}
                                            @if ($loop->last)
                                                <div class="status-selected">
                                                    <input type="radio" id="hadir" name="status{{ $item }}"
                                                        value="" onclick="updateHide{{ $loop->iteration }}()">
                                                    hadir
                                                    <input type="radio" id="alfa" name="status{{ $item }}"
                                                        value="" onclick="updateHide{{ $loop->iteration }}()">
                                                    alfa
                                                    <input type="radio" id="izin{{ $loop->iteration }}"
                                                        name="status{{ $item }}" value="izin"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    izin
                                                    <input type="radio" id="sakit{{ $loop->iteration }}"
                                                        name="status{{ $item }}" value="sakit"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    sakit
                                                </div>
                                            @else
                                                <div class="status-diselected">
                                                    <input type="radio" id="hadir" name="status{{ $item }}"
                                                        value="" onclick="updateHide{{ $loop->iteration }}()">
                                                    hadir
                                                    <input type="radio" id="alfa" name="status{{ $item }}"
                                                        value="" onclick="updateHide{{ $loop->iteration }}()">
                                                    alfa
                                                    <input type="radio" id="izin{{ $loop->iteration }}"
                                                        name="status{{ $item }}" value="izin"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    izin
                                                    <input type="radio" id="sakit{{ $loop->iteration }}"
                                                        name="status{{ $item }}" value="sakit"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    sakit
                                                </div>
                                            @endif
                                            {{-- <label class="radio-inline">
                                                            <input id="hadir" type="radio"
                                                            name="status[{{ $item }}]" value="Hadir"> Hadir
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input id="izin" type="radio"
                                                            name="status[{{ $item }}]" value="Izin"> Izin
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="sakit" type="radio"
                                                            name="status[{{ $item }}]" value="Sakit"> Sakit
                                                    </label> --}}
                                            {{-- @endif --}}
                                            {{-- @if ($loop->last)
                                                        <div id="rates">
                                                            <input type="radio" id="r1" name="rate"
                                                                value="Fixed Rate"> Fixed Rate
                                                            <input type="radio" id="r2" name="rate"
                                                                value="Variable Rate"> Variable Rate
                                                            <input type="radio" id="r3" name="rate"
                                                            value="Multi Rate" checked="checked"> Multi Rate
                                                        </div>
                                                    @endif --}}
                                        </td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                <input type="hidden" name="id">
                                                <input type="file" class="form-control form-control-sm p-0"
                                                    id="upload{{ $loop->iteration }}" style="display: none">
                                            </form>
                                            <script>
                                                function updateShow{{ $loop->iteration }}() {
                                                    document.getElementById("upload{{ $loop->iteration }}").style.display = "inline";
                                                    // document.getElementById("header").style.display = "block";
                                                }

                                                function updateHide{{ $loop->iteration }}() {
                                                    document.getElementById("upload{{ $loop->iteration }}").style.display = "none";
                                                    // document.getElementById("header").style.display = "none ";
                                                }
                                            </script>
                                        </td>
                                        {{-- <td>
                                            <input type="submit" class="btn btn-sm btn-primary"
                                                id="izin{{ $loop->iteration }}" style="display: none" value="sakit">
                                            </form>
                                            <form action="" class="action">
                                                @csrf
                                                <input type="hidden" name="id" id="">
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    id="sakit{{ $loop->iteration }}" style="display: none " value="izin">
                                            </form>
                                            
                                        </td> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
