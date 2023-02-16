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
    {{-- <div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class= "table-responsive-lg">
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
                                @foreach ($siswa as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>
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
                                <form action="{{ route('absen.store') }}" method="POST">
                                    @csrf
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <input type="date" name="tanggal" id="tanggal" class="form-control"
                                            aria-describedby="helpId">
                                    </div>
                                    @foreach ($siswa as $i => $item)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nisn }}</td>
                                            <td>
                                                @if ($loop->last)
                                                    <div class="status-selected">
                                                        <input type="radio" id="status"
                                                            name="status" value="hadir"
                                                            onclick="updateHide{{ $loop->iteration }}()">
                                                        hadir
                                                        <input type="radio" id="status"
                                                            name="status" value="alpha"
                                                            onclick="updateHide{{ $loop->iteration }}()">
                                                        alfa
                                                        <input type="radio" id="status{{ $loop->iteration }}"
                                                            name="status" value="izin"
                                                            onclick="updateShow{{ $loop->iteration }}()">
                                                        izin
                                                        <input type="radio" id="status{{ $loop->iteration }}"
                                                            name="status" value="sakit"
                                                            onclick="updateShow{{ $loop->iteration }}()">
                                                        sakit
                                                    </div>
                                                @else
                                                    <div class="status-diselected">
                                                        <input type="radio" id="status"
                                                            name="status" value="hadir"
                                                            onclick="updateHide{{ $loop->iteration }}()">
                                                        hadir
                                                        <input type="radio" id="status"
                                                            name="status" value="alfa"
                                                            onclick="updateHide{{ $loop->iteration }}()">
                                                        alfa
                                                        <input type="radio" id="status{{ $loop->iteration }}"
                                                            name="status" value="izin"
                                                            onclick="updateShow{{ $loop->iteration }}()">
                                                        izin
                                                        <input type="radio" id="status{{ $loop->iteration }}"
                                                            name="status" value="sakit"
                                                            onclick="updateShow{{ $loop->iteration }}()">
                                                        sakit
                                                    </div>
                                                @endif


                                                {{-- <form style="width: 200px" action="" method="POST">
                                                    @csrf --}}
                                                    <input type="hidden" name="id">
                                                    <input type="file" class="form-control form-control-sm p-0"
                                                        id="upload{{ $loop->iteration }}" style="display: none">
                                                {{-- </form> --}}

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
                                    @endforeach
                                    <div class="form-group d-flex flex-row-reverse">
                                        <input type="submit" class="btn btn-success" value="simpan">
                                    </div>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                                                function updateHide{{ $loop->iteration }}() {
                                                    document.getElementById("upload{{ $loop->iteration }}").style.display = "none";
                                                    // document.getElementById("header").style.display = "none ";
                                                }
                                    </script>
                                 </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('absen.store') }}" method="post">
                                @csrf
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                                        aria-describedby="helpId">
                                </div>

                        <tbody>
                            @foreach ($siswa as $i => $item)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>
                                        {{ $item->nama }}
                                        <input type="hidden" name="siswa_id[]" id="siswa_id" value="{{ $item->id }}">
                                        <input type="hidden" name="kelas_id" id="kelas_id" class="form-control"
                                            value="{{ $item->kelas_id }}">
                                    </td>
                                    <td>

                                        <div class="form-group">
                                            <select class="form-select form-control" id="status" name='status'
                                                onchange="yesnoCheck()">
                                                <option value="hadir" onchange="yesoffCheck()">
                                                    Hadir</option>
                                                <option value="alpha" onchange="yesoffCheck()">
                                                    Alpha</option>
                                                <option value="sakit" onchange="yesnoCheck()">
                                                    Sakit</option>
                                                <option value="izin" onchange="yesnoCheck()">
                                                    Izin</option>
                                            </select>
                                        </div>

                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" id="id">
                                            <input type="file" class="form-control form-control-sm p-0"
                                                id="upload{{ $loop->iteration }}" style="display: none">
                                        </form>
                                        <script>
                                            function yesnoCheck{{ $loop->iteration }}() {

                                                var e = document.getElementById("status");
                                                var that = e.options[e.selectedIndex];

                                                // elseif (that.value == "izin") {
                                                //     document.getElementById("upload").style.display = "none";
                                                // } elseif (that.value == "sakit"){
                                                //     document.getElementById("upload").style.display = "none";
                                                // } elseif (that.value == "sakit")


                                                if (that.value == "sakit") {
                                                    document.getElementById("upload").style.display = "inline";
                                                } else if (that.value == "izin") {
                                                    document.getElementById("upload").style.display = "inline";
                                                } else {
                                                    document.getElementById("upload").style.display = "none";
                                                }
                                            }

                                            function yesoffCheck{{ $loop->iteration }}() {

                                                var e = document.getElementById("status");
                                                var that = e.options[e.selectedIndex];

                                                // elseif (that.value == "izin") {
                                                //     document.getElementById("upload").style.display = "none";
                                                // } elseif (that.value == "sakit"){
                                                //     document.getElementById("upload").style.display = "none";
                                                // } elseif (that.value == "sakit")


                                                if (that.value == "alpha") {
                                                    document.getElementById("upload").style.display = "none";
                                                } else if (that.value == "hadir") {
                                                    document.getElementById("upload").style.display = "none";
                                                } else {
                                                    document.getElementById("upload").style.display = "inline";
                                                }
                                            }

                                            // function updateShow() {
                                            //     document.getElementById("upload").style.display = "inline";
                                            //     // document.getElementById("header").style.display = "block";
                                            // }

                                            // function updateHide() {
                                            //     document.getElementById("upload").style.display = "none";
                                            //     // document.getElementById("header").style.display = "none ";
                                            // }
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <div class="form-group d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-success" value="simpan">
                        </div>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
