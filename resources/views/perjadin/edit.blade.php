@extends('adminlte::page')

@section('title', 'Edit Data Perjadin')

@section('content_header')
<h1>Edit Data Perjalanan Dinas</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('perjadin.update',[$perjadin->kd_perjadin])}}" method="POST">@csrf
          <input type="hidden" name="_method" value="PUT">
            <div class="card">
              {{-- <div class="card-header">
                <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table width="100%" border="0">

                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$perjadin->nik}}" name="nik" id="nik" class="form-control">
                                </td>
                                <td colspan="2"></td>
                                <td>Nama</td>
                                <td>:</td>
                                <td width="50%">
                                    <input type="text" value="{{$perjadin->nm_pegawai}}" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Perjadin</td>
                                <td>:</td>
                                <td>
                                    <input type="date" value="{{date("Y-m-d", strtotime($perjadin->tgl_berangkat))}}" required name="tglberangkat" class="form-control">
                                </td>
                                <td>to</td>
                                <td>
                                    <input type="date" value="{{date("Y-m-d", strtotime($perjadin->tgl_pulang))}}" required name="tglplg" class="form-control">
                            </tr>

                            <tr>    
                                <td>Tempat/Tujuan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$perjadin->tempat_dinas}}" required class="form-control" name="tempat">
                                </td>
                            </tr>

                            <tr>    
                                <td>Acara/Alasan</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" required name="acara">{{$perjadin->alsn_perjadin}}</textarea>
                                </td>
                            </tr>

                        </table> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit"> Update</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    $("#nik").on('keydown',function(event){
        if(event.keyCode == 9) {
            let id = $('#nik').val();
            let url = '{{route("getpegawai.pegawai","param")}}';
            url = url.replace('param',id)
            $.get(url,function(data){
                if(data.msg == "0") {
                    alert("Pegawai Tidak ditemukan.");
                    $('#nik').val('');
                    $("#nama").val('');
                } else {
                    $("#nik").val(data.data['nik']);
                    $("#nama").val(data.data['nm_pegawai']);
                }
            })
        }  
    });
</script>
@stop
