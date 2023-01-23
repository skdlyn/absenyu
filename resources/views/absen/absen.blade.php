@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'list untuk absen kelas')
@section('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">KELAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $i => $item)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td><a href={{ 'absen/' . $item->id }}>{{ $item->nama_kelas }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
