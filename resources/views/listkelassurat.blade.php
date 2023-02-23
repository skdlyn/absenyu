@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'hasil absen per Kelas')
@section('content')

    <div class="row">
        <div class="col-lg-12">
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
                                    <td><a href={{ '/lihatsurat' . $kelas->id }}>{{ $item->nama_kelas }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection
