@extends('layout.admin')

@section('content')
@section('title', 'Upload Surat')
<div class="container">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">

                {{-- Search Bar --}}
                <div class="row align-items-center">
                    <div class="col">
                        <div class="content">
                            <ol class="breadcrumb">
                                <li><a href="/dashboard"><em class="fa fa-home"></em></a> Upload Surat</li>
                                {{-- <li class="active">  Dashboard</li> --}}
                            </ol>
                        </div>
                    </div>
                    <div class="col-4">
                        <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control bg-light w-25" placeholder="Search"
                                    aria-describedby="button-addon2" id="cari" name="cari" value="">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <h6>Upload Sakit</h6>
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>STATUS</th>
                            <th>UPLOAD SURAT</th>
                        </tr>
                    </thead>
                    @foreach ($stat as $s)
                        <form method="POST" action="{{ route('surat.update', $s->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <tbody>
                                @if ($stat->isempty())
                                    <tr>
                                        <td>tidak ada siswa yang sakit</td>
                                    </tr>
                                @else
                                    {{-- @foreach ($stat as $status) --}}
                                        <tr>
                                            <td scope="col">{{ $loop->iteration }}</td>
                                            <td>{{ $s->user->name }}</td>
                                            {{-- {{-- <td scope="row">{{ $b->id }}">{{ $b->name }}</td> --}}
                                            <td scope="row">{{ $s->status }}</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="file" id="surat" name="surat_sakit"
                                                        class="form-control-file">
                                                </div>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                @endif
                                <div class="row justify-content-end mx-2">
                                    <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                                </div>
                        </form>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
