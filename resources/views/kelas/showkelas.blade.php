@extends('layout.admin')
@section('title', 'list rekap')
@section('content-title')
@section('content')

    <div class="row">
        <ol class="breadcrumb mx-2">
            <a href="/datakelas">
                <li><em class="fa fa-home"></em> Data Kelas</li>
            </a>
        </ol>

        {{-- <ol class="breadcrumb mx-2">
            <li><a href="/datakelas"><i class="bi bi-arrow-return-left"></i></a> Data Kelas</li>
        </ol> --}}
    </div>

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
                    {{-- datepicker --}}
                    <div class="row">
                        <div class="col-lg-">
                            <div class="form-group">
                                <label for="tanggal">tanggal</label>
                                <div class="input-group date">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">NISN</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $i => $item)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jk }}</td>
                                    <td>
                                        <a href="{{ route('showkelas.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('datasiswa.hapus', $item->id) }}"
                                            class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
