@extends('admin.body')

@section('content')
@section('title', 'Upload Surat')
<div class="container">
    <div class="col-lg-12">
        <h4>Daftar Kelas</h4>
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
                                        {{-- <td>{{ $k }}</td> --}}
                                        <td><a href="{{route('surat.show', $k->id) }}">{{ $k->nama_kelas }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
