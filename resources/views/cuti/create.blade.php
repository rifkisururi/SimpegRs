@extends('adminlte::page')

@section('title', 'Input Data Cuti')

@section('content_header')
<h1>Input Data Cuti Pegawai</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('cuti.store')}}" method="POST">@csrf
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
                                <td>Kode Cuti</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required class="form-control" name="kdcuti">
                                </td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="nik" id="nik" class="form-control">
                                </td>
                                <td colspan="2"></td>
                                <td>Nama</td>
                                <td>:</td>
                                <td width="50%">
                                    <input type="text" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>
                                <td width="45%">Jenis Pengajuan</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="jcuti">
                                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                                        <option value="Cuti Nikah">Cuti Nikah</option>
                                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                        <option value="Cuti Alasan Penting">Cuti Alasan Penting</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Pengajuan</td>
                                <td>:</td>
                                <td>
                                    <input type="date" required name="tglawal" class="form-control">
                                </td>
                                <td>to</td>
                                <td>
                                    <input type="date" required name="tglakhir" class="form-control">
                                </td>
                            </tr>
                            <tr>    
                                <td>Total Cuti</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" name="total">
                                </td>
                            </tr>
                            <tr>    
                                <td>Cuti Yang Diajukan</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" name="cutipeng">
                                </td>
                            </tr>
                            <tr>    
                                <td>Sisa Cuti</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" name="sisa">
                                </td>
                            </tr>
                        </table> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit"> Simpan</button>
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
