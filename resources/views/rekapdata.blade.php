@extends('layout.admin')
@section('title', 'Rekap')
@section('content-title', 'Rekap Absen')
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
<!-- Button trigger modal -->
@if ($message = Session::get('berhasil'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Rekap Absensi Kelas {{$resource->tingkat_kelas."-".$resource->jurusan." ".$resource->nama_kelas}}</div>
            <div class="panel-body">
                <form action="/rekap/pribadipdf/" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$resource->id_kelas}}">
                    <input type="hidden" name="tanggal_awal">
                    <input type="hidden" name="tanggal_akhir">
                    <div class="table-responsive">
                        <table id="absensi" class="table table-bordred table-striped">
                            <thead>
                                <tr>
                                    <th colspan="8">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' id="demo" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <button type="submit" class="btn btn-danger">PDF</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="3%" class="text-center">No</th>
                                   <!--  <th width="20%">QR</th> -->
                                    <th width="20%">NIS</th>
                                    <th width="20%">Nama Siswa</th>
                                    <th width="20%">Alfa</th>
                                    <th width="20%">Izin</th>
                                    <th width="20%">Sakit</th>
                                </tr>
                            </thead>

                            <tbody id="isi">
                                @foreach ($resource->siswa as  $index => $res)
                                <tr>
                                    <td class="text-center">{{ $index+1 }}</td>
                                    <td>{{ $res->nis}}</td>
                                    <td>{{ $res->nama}}</td>
                                    <td>{{ count(Absen::where(['siswa_id'=>$res->id_siswa, 'status'=>'Alfa'])->get()) }}</td>
                                    <td>{{ count(Absen::where(['siswa_id'=>$res->id_siswa, 'status'=>'Izin'])->get()) }}</td>
                                    <td>{{ count(Absen::where(['siswa_id'=>$res->id_siswa, 'status'=>'Sakit'])->get()) }}</td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            <p class="back-link">&copy; <?php echo date('Y') ?> Riana Ainun</p>
        </div>
    </div><!--/.row-->
</div>
</div>
@endsection