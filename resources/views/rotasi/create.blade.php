@extends('adminlte::page')

@section('title', 'Input Data Rotasi')

@section('content_header')
<h1>Input Data Rotasi</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('rotasi.store')}}" method="POST">@csrf
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
                                <td width="150">Kode Rotasi</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required name="kdrotasi" class="form-control">
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
                                <td width="40%">
                                    <input type="text" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Unit Kerja Sebelum</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="uksebelum">
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Poli Bedah">Poli Bedah</option>
                                        <option value="Poli Paru">Poli Paru</option>
                                        <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                                        <option value="Poli Anak">Poli Anak</option>
                                        <option value="Instalasi Laboratorium">Instalasi Laboratorium</option>
                                        <option value="Instalasi Gawat Darurat (IGD)">Instalasi Gawat Darurat (IGD)</option>
                                        <option value="Instalasi Radiologi">Instalasi Radiologi</option>
                                        <option value="Intensive Care Unit (ICU)">Intensive Care Unit (ICU)</option>
                                        <option value="Instalasi Rawat Jalan">Instalasi Rawat Jalan</option>
                                        <option value="Instalasi Rawat Inap Lt 4">Instalasi Rawat Inap Lt 4</option>
                                        <option value="Instalasi Rawat Inap Lt 5">Instalasi Rawat Inap Lt 5</option>
                                        <option value="IPSRS">IPSRS</option>
                                        <option value="Instalasi Rekam Medik">Instalasi Rekam Medik</option>
                                        <option value="K3RS">K3RS</option>
                                        <option value="Instalasi Gizi">Instalasi Gizi</option>
                                        <option value="Pendaftaran">Pendaftaran</option>
                                    </select>
                                <td>
                            </tr>

                            <tr>    
                                <td>Unit Kerja Sesudah</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="uksesudah">
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Poli Bedah">Poli Bedah</option>
                                        <option value="Poli Paru">Poli Paru</option>
                                        <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                                        <option value="Poli Anak">Poli Anak</option>
                                        <option value="Instalasi Laboratorium">Instalasi Laboratorium</option>
                                        <option value="Instalasi Gawat Darurat (IGD)">Instalasi Gawat Darurat (IGD)</option>
                                        <option value="Instalasi Radiologi">Instalasi Radiologi</option>
                                        <option value="Intensive Care Unit (ICU)">Intensive Care Unit (ICU)</option>
                                        <option value="Instalasi Rawat Jalan">Instalasi Rawat Jalan</option>
                                        <option value="Instalasi Rawat Inap Lt 4">Instalasi Rawat Inap Lt 4</option>
                                        <option value="Instalasi Rawat Inap Lt 5">Instalasi Rawat Inap Lt 5</option>
                                        <option value="IPSRS">IPSRS</option>
                                        <option value="Instalasi Rekam Medik">Instalasi Rekam Medik</option>
                                        <option value="K3RS">K3RS</option>
                                        <option value="Instalasi Gizi">Instalasi Gizi</option>
                                        <option value="Pendaftaran">Pendaftaran</option>
                                    </select>
                                <td>
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

