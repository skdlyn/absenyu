@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

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
    <!-- Button trigger modal -->
    @if ($message = Session::get('berhasil'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="panel-heading">
                        {{-- <h5><b> Absensi Siswa {{ ' (' . Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') . ')' }}</h5> --}}
                        {{-- <div class="dropdown">


                            <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Bulan ke 
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div> --}}
                        <form method="post" action="{{ route('absen.store') }}">
                            @csrf

                            <input type="date" id="tanggal" name="tanggal">

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
                                                                value=""> hadir
                                                            <input type="radio" id="alfa" name="status{{ $item }}"
                                                                value=""> alfa
                                                            <input type="radio" id="izin" name="status{{ $item }}"
                                                                value=""> izin
                                                            <input type="radio" id="sakit" name="status{{ $item }}"
                                                                value=""> sakit
                                                        </div>
                                                    @else
                                                        <div class="status-diselected">
                                                            <input type="radio" id="hadir" name="status{{ $item }}"
                                                                value=""> hadir
                                                            <input type="radio" id="alfa" name="status{{ $item }}"
                                                                value=""> alfa
                                                            <input type="radio" id="izin" name="status{{ $item }}"
                                                                value=""> izin
                                                            <input type="radio" id="sakit" name="status{{ $item }}"
                                                                value=""> sakit
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
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <input type="submit" class="btn btn-success" value="Save">
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Submit
                            </button> --}}

                            <!-- Modal -->
                            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Sudah Yakin ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
