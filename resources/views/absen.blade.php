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
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="panel-heading">
                        <h5><b> Absensi Siswa {{ ' (' . Carbon\Carbon::now('Asia/Jakarta')->format('d F Y') . ')' }}</h5>
                    </div>
                    <form method="post" action="{{ route('absen.store') }}">
                        @csrf
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">KET</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i => $item)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nisn }}</td>
                                            <td>
                                                @if ($loop->last)
                                                    <label class="radio-inline">
                                                        <input id="hadir" type="radio"
                                                            name="status[{{ $item }}]" value="Hadir"> Hadir
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                    </label>

                                                    {{-- sakit & izin --}}
                                                    <label class="radio-inline">
                                                        <input id="pills-izin" type="radio"
                                                            name="status[{{ $item }}]" value="Izin"> Izin
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="pills-sakit" type="radio"
                                                            name="status[{{ $item }}]" value="Sakit"> Sakit
                                                    </label>
                                                @else
                                                    <label class="radio-inline">
                                                        <input id="hadir" type="radio"
                                                            name="status[{{ $item }}]" value="Hadir"> Hadir
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                    </label>
                                                    {{-- sakit & izin --}}
                                                    <label class="radio-inline">
                                                        <input id="izin" type="radio"
                                                            name="status[{{ $item }}]" value="Izin"> Izin
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="sakit" type="radio"
                                                            name="status[{{ $item }}]" value="Sakit"> Sakit
                                                    </label>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($loop->last)
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <label class="nav-item" role="presentation">
                                                            <input class="nav-link" id="home-tab" data-bs-toggle="tab"
                                                                data-bs-target="#home" type="radio" role="tab"
                                                                aria-controls="home" aria-selected="false">Home
                                                        </label>
                                                        <li class="nav-item" role="presentation">
                                                            <input class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                                data-bs-target="#profile" type="radio" role="tab"
                                                                aria-controls="profile" aria-selected="false">Profile
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <input class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                                                data-bs-target="#messages" type="radio" role="tab"
                                                                aria-controls="messages" aria-selected="false">Messages
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <input class="nav-link" id="settings-tab"
                                                                data-bs-toggle="tab" data-bs-target="#settings"
                                                                type="radio" role="tab" aria-controls="settings"
                                                                aria-selected="false">Settings
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="home" role="tabpanel"
                                                            aria-labelledby="home-tab">1</div>
                                                        <div class="tab-pane" id="profile" role="tabpanel"
                                                            aria-labelledby="profile-tab">2</div>
                                                        <div class="tab-pane" id="messages" role="tabpanel"
                                                            aria-labelledby="messages-tab">3</div>
                                                        <div class="tab-pane" id="settings" role="tabpanel"
                                                            aria-labelledby="settings-tab">4</div>
                                                    @else
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <label class="nav-item" role="presentation">
                                                                <input class="nav-link" id="home-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#home"
                                                                    type="radio" role="tab" aria-controls="home"
                                                                    aria-selected="false">Home
                                                            </label>
                                                            <li class="nav-item" role="presentation">
                                                                <input class="nav-link" id="profile-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#profile"
                                                                    type="radio" role="tab" aria-controls="profile"
                                                                    aria-selected="false">Profile
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <input class="nav-link" id="messages-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#messages"
                                                                    type="radio" role="tab"
                                                                    aria-controls="messages"
                                                                    aria-selected="false">Messages
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <input class="nav-link" id="settings-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#settings"
                                                                    type="radio" role="tab"
                                                                    aria-controls="settings"
                                                                    aria-selected="false">Settings
                                                            </li>
                                                        </ul>

                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Submit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Sudah Yakin ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" value="Save">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
