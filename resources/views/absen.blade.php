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


    {{-- <h5><b> Absensi Siswa {{ ' (' . Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') . ')' }}</h5> --}}
    {{-- <div class="dropdown">


    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard"><em class="fa fa-home"></em></a> Absen</li>
            {{-- <li class="active">  Dashboard</li> --}}
        {{-- </ol>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">JUMLAH SISWA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $i => $item)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    {{-- <td>{{ $item->nama_kelas }}</td> --}}
                                    {{-- <td><a href="{{ url('absen' . $item->id_kelas) }}">{{ $item->nama_kelas }}</a></td> --}}
                                    <td><a href="{{ url('absen/' . $item->id) }}">{{ $item->nama_kelas }}</a></td>
                                    <td>{{ $item->kuota }}</a></td>
                                </tr>
                        </tbody>

                        
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
