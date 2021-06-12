@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
<h1>LAPORAN</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
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
                                <td width="150">Data</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="data">
                                        <option value="">Data Pegawai</option>
                                        <option value="">Data Cuti</option>
                                        <option value="">Data Perjalanan Dinas</option>
                                        <option value="">Rotasi Pegawai</option>
                                        <option value="">Kenaikan Pangkat</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="" name="nik" id="nik" class="form-control">
                                </td>
                            </tr>
                        </table> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success"> Lihat</button>
                        <button class="btn btn-success"> Ekspor</button></div>
                    <div class="col-md-2"></div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
$(function () {
})
</script><script>
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
