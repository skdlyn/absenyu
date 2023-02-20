@extends('layout.admin')
@section('title', 'daftar absen')
@section('content-title')
@section('content')


    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating" placeholder="Nama Siswa">
                {{-- <label class="focus-label">Employee Name</label> --}}
            </div>
        </div>
    
        
        
        <div>
            <ul style="display:none ">
                <li>bulan : {{ $m }}</li>
                <li>tahun : {{ $y }}</li>
            </ul>
        </div>
    </div>

    <table class="table table-striped table-responsive" style="flex-wrap: wrap">
        <thead class="bg-primary text-white">
            <tr>
                <th>NO</th>
                <th>NAMA SISWA</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                @foreach ($d as $s)
                    <td>
                        {{ $s }}
                    </td>
                @endforeach
            </tr>
        </thead>

        <tbody>
            @foreach ($coba as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td colspan="8">{{ $s->name }}</td>
                    {{-- <td>{{ $s->absen }}</td> --}}
                    @foreach ($s->absen as $a)
                        @if ($a->status == 'hadir')
                            <td style="background-color: rgb(20, 170, 15)" class="text-white">H</td>
                        @elseif($a->status == 'izin')
                            <td style="background-color: rgb(241, 162, 16)" class="text-white">I</td>
                        @elseif($a->status == 'sakit')
                            <td style="background-color: rgb(241, 218, 16)" class="text-white">S</td>
                        @elseif($a->status == 'alpha')
                            <td style="background-color: rgb(241, 23, 16)" class="text-white">A</td>
                        @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="" type="button" class="btn btn-sm btn-outline-danger">PDF</a> --}}

    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped" style="flex-wrap: wrap">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Siswa</td>
                            @foreach ($d as $s)
                            <td>
                                    {{ $s }}
                                </td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coba as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->name }}</td>

                                @foreach ($s->absen as $a)
                                        @if ($a->status == 'hadir')
                                        <td style="background-color: rgb(20, 170, 15)" class="text-white">H</td>
                                @elseif($a->status == 'izin')
                                    <td style="background-color: rgb(241, 162, 16)">I</td>
                                    @elseif($a->status == 'sakit')
                                    <td style="background-color: rgb(241, 218, 16)">S</td>
                                @elseif($a->status == 'alpha')
                                    <td style="background-color: rgb(241, 23, 16)" class="text-white">A</td>
                                @endif
                                </td>
                        @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

@endsection
