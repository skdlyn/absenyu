@extends('layout.admin')
@section('title', 'Reakp')
@section('content-title', 'Rekap Absen')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Rekap Absensi Kelas</div>
            <div class="panel-body">
                <form action="/rekap/pribadipdf/" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$kelas->id}}">
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
                                    <th width="20%">NIS</th>
                                    <th width="20%">Nama Siswa</th>
                                    <th width="20%">Alfa</th>
                                    <th width="20%">Izin</th>
                                    <th width="20%">Sakit</th>
                                </tr>
                            </thead>

                            <tbody id="isi">
                                @foreach ($siswa as  $index => $res)
                                <tr>
                                    <td class="text-center">{{ $index+1 }}</td>
                                    <td>{{ $res->nis}}</td>
                                    <td>{{ $res->nama}}</td>
                                    <td>{{ count(App\Absen::where(['siswa_id'=>$res->id, 'status'=>'Alfa'])->get()) }}</td>
                                    <td>{{ count(App\Absen::where(['siswa_id'=>$res->id, 'status'=>'Izin'])->get()) }}</td>
                                    <td>{{ count(App\Absen::where(['siswa_id'=>$res->id, 'status'=>'Sakit'])->get()) }}</td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </form>
            </div>
        </div>