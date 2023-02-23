    @extends('admin.body')
    @section('header', 'Data Kelas')
    @section('tab', 'Data Kelas')
    @section('content')


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
        @if ($message = Session::get('berhasil'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever>Tambah Kelas</button> --}}

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-white" style="background-color: #6b5b95">
                                <tr>
                                    <th scope="col">NO</th>
                                    {{-- <th scope="col">NAMA KELAS</th> --}}
                                    <th scope="col">KELAS</th>
                                    {{-- <th scope="col">JURUSAN</th> --}}
                                    {{-- <th scope="col">KUOTA</th> --}}
                                    <th scope="col">WALI KELAS</th>
                                    <th scope="col">TAHUN MASUK</th>
                                    <th scope="col">TAHUN KELUAR</th>
                                    {{-- <th scope="col">ACTION</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru  as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration}}</th>
                                        {{-- <td>{{ $item->kelas->nama_kelas}}</td> --}}
                                        <td><a href="{{ url('datakelas/' . $item->kelas->id) }}">{{ $item->kelas->nama_kelas }}</a></td>
                                        <td>{{ $item->name}} </td>
                                        <td>{{ $item->kelas->tahun_masuk}}</td>
                                        <td>{{ $item->kelas->tahun_keluar}}</td>
                                        {{-- <td>
                                            <a href="{{ route('datakelas.edit', $item->id) }}"
                                                class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
