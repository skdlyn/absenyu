@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    @if ($pesan = Session::get('absen_done'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dimsiss="alert"></button>
            <strong>{{ $pesan }}</strong>
        </div>
    @endif

    
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
                                    {{ $g->kelas->nama_kelas }}
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
                                    {{ $g->name }}
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
    </div>

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

                                @foreach ($siswa as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>
                                            {{ $item->name }}
                                            <input type="hidden" name="siswa[]" id="siswa"
                                                value="{{ $item->id }}">
                                            <input type="hidden" name="kelas" id="kelas" class="form-control"
                                                value="{{ $item->kelas_id }}">
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-select form-control" id="status" name='status[]'>
                                                    <option value="hadir">hadir</option>
                                                    <option value="alpha">alpha</option>
                                                    <option value="sakit">sakit</option>
                                                    <option value="izin">izin</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
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



@endsection
