@extends('adminlte::page')

@section('title', 'Edit Data Cuti')

@section('content_header')
<h1>Edit Data Cuti</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('cuti.update',[$cuti->kd_cuti])}}" method="POST">@csrf
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
                                    <input type="text" value="{{$cuti->nik}}" name="nik" id="nik" class="form-control">
                                </td>
                                <td colspan="2"></td>
                                <td>Nama</td>
                                <td>:</td>
                                <td width="50%">
                                    <input type="text" value="{{$cuti->nm_pegawai}}" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja Sebelum</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="uksebelum">
                                        
                                        <option value="Cuti Tahunan" {{$cuti->jenis_pengajuan == 'Cuti Tahunan' ? 'selected' : ''}}>Cuti Tahunan</option>
                                        <option value="Cuti Nikah" {{$cuti->jenis_pengajuan == 'Cuti Nikah' ? 'selected' : ''}}>Cuti Nikah</option>
                                        <option value="Cuti Melahirkan" {{$cuti->jenis_pengajuan == 'Cuti Melahirkan' ? 'selected' : ''}}>Cuti Melahirkan</option>
                                        <option value="Cuti Alasan Penting" {{$cuti->jenis_pengajuan == 'Cuti Alasan Penting' ? 'selected' : ''}}>Cuti Alasan Penting</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Pengajuan</td>
                                <td>:</td>
                                <td>
                                    <input type="date" value="{{date("Y-m-d", strtotime($cuti->tgl_pengajuan))}}" required name="tglawal" class="form-control">
                                </td>
                                <td>to</td>
                                <td>
                                    <input type="date" value="{{date("Y-m-d", strtotime($cuti->tgl_akhir))}}" required name="tglakhir" class="form-control">
                            </tr>

                            <tr>    
                                <td>Total Cuti</td>
                                <td>:</td>
                                <td>
                                    <input type="number" value="{{$cuti->total_cuti}}" required class="form-control" name="total">
                                </td>
                            </tr>

                            <tr>    
                                <td>Cuti Yang Diajukan</td>
                                <td>:</td>
                                <td>
                                    <input type="number" value="{{$cuti->cuti_diajukan}}" required class="form-control" name="cutipeng">
                                </td>
                            </tr>

                            <tr>    
                                <td>Sisa Cuti</td>
                                <td>:</td>
                                <td>
                                    <input type="number" value="{{$cuti->sisa_cuti}}" required class="form-control" name="sisa">
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
