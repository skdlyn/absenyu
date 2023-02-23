@extends('admin.body')
@section('title', 'Absen')
@section('content-title')
@section('content')

    @if ($pesan = Session::get('absen_done'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dimsiss="alert"></button>
            <strong>{{ $pesan }}</strong>
        </div>
    @endif


    <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-dark">Lakukan Absen</h3>
    <div class="row">
        <div class="col-xl-3 col-md-6 md-6 mb-4">
            <div class="card border-left-primary  h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kelas
                            </div>
                            <div class="h6 mb-0 font-weight-bold text-primary">
                                @foreach ($guru as $g)
                                    {{ $g->kelas->nama_kelas }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-primary"></i>
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
                            <div class="h6 mb-0 font-weight-bold text-success">
                                @foreach ($guru as $g)
                                    {{ $g->name }}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-success"></i>
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
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Total siswa
                            </div>
                            <div class="h6 mb-0 font-weight-bold text-secondary">
                                {{ $total }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-secondary"></i>
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
                            <div class="h6 mb-0 font-weight-bold text-info">
                                {{ Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-info"></i>
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
                    <table class="table table-bordered">
                        <thead class="text-white" style="background-color: #6b5b95">
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
                                        {{-- <h5 >{{ $siswa }}</h5> --}}
                                    </div>
                                    
                                    @foreach ($siswa as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>
                                            {{ $item->name }}
                                            <input type="hidden" name="siswa_id[]" id="siswa_id"
                                                value="{{ $item->id }}">
                                            <input type="hidden" name="kelas_id[]" id="kelas"
                                                value="{{ $item->kelas_id }}">
                                            {{-- <input type="hidden" name=["kelas_id" id="kelas_id" class="form-control"
                                                value="{{ $item->kelas_id }]}"> --}}
                                        </td>
                                        <td>

                                            {{-- @if ($loop->last)
                                                <div class="status-selected">
                                                    <input type="radio" id="hadir" name="status[{{ $item->id}}]"
                                                        value="hadir" onclick="updateHide{{ $loop->iteration }}()">
                                                    Hadir
                                                    <input type="radio" id="alfa" name="status[{{ $item->id}}]"
                                                        value="alfa" onclick="updateHide{{ $loop->iteration }}()">
                                                    Alfa
                                                    <input type="radio" id="izin{{ $loop->iteration }}"
                                                        name="status[{{ $item->id}}]" value="izin"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    Izin
                                                    <input type="radio" id="sakit{{ $loop->iteration }}"
                                                        name="status[{{ $item->id}}]" value="sakit"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    Sakit
                                                </div>
                                            @else
                                                <div class="status-diselected">
                                                    <input type="radio" id="hadir" name="status[{{ $item->id}}]"
                                                        value="hadir" onclick="updateHide{{ $loop->iteration }}()">
                                                    Hadir
                                                    <input type="radio" id="alfa" name="status[{{ $item->id}}]"
                                                        value="alfa" onclick="updateHide{{ $loop->iteration }}()">
                                                    Alfa
                                                    <input type="radio" id="izin{{ $loop->iteration }}"
                                                        name="status[{{ $item->id}}]" value="izin"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    Izin
                                                    <input type="radio" id="sakit{{ $loop->iteration }}"
                                                        name="status[{{ $item->id}}]" value="sakit"
                                                        onclick="updateShow{{ $loop->iteration }}()">
                                                    Sakit
                                                </div>
                                            @endif --}}
                                            <select class="form-select form-control" id="status" name='status[]'>
                                                <option value="hadir">hadir</option>
                                                <option value="alpha">alpha</option>
                                                <option value="sakit">sakit</option>
                                                <option value="izin">izin</option>
                                            </select>

                                            <input type="hidden" name="id">
                                            <input type="file" class="form-control form-control-sm p-0"
                                                id="upload{{ $loop->iteration }}" style="display: none; width:203px">

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
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-group d-flex flex-row-reverse mx-3">
                    <input type="submit" class="btn btn-success" value="SIMPAN">
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
