@extends('admin.body')
@section('title', 'Absen')
@section('content-title')
@section('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <div class="col-lg-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif(session('absen'))
            <div class="alert alert-danger" role="alert">
                {{ session('absen') }}
            </div>
        @endif
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/dashboard"><em class="fa fa-home"></em></a> Absen Hari Ini</li>
                {{-- <li class="active">  Dashboard</li> --}}
            </ol>
        </div>
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <table class="table">
                    <thead class="text-white" style="background-color: #6b5b95">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">KELAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $k)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href={{ 'absen/' . $k->id }}>{{ $k->nama_kelas }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
