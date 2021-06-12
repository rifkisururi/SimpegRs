@extends('adminlte::page')

@section('title', 'Edit Data Rotasi')

@section('content_header')
<h1>Edit Data Rotasi</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('rotasi.update',[$rotasi->kd_rotasi])}}" method="POST">@csrf
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
                                    <input type="text" value="{{$rotasi->nik}}" name="nik" id="nik" class="form-control">
                                </td>
                                <td colspan="2"></td>
                                <td>Nama</td>
                                <td>:</td>
                                <td width="50%">
                                    <input type="text" value="{{$rotasi->nm_pegawai}}" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja Sebelum</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="uksebelum">
                                        <option value="Manajemen" {{$rotasi->uk_sblm == 'Manajemen' ? 'selected' : ''}}>Manajemen</option>
                                        <option value="Poli Bedah" {{$rotasi->uk_sblm == 'Poli Bedah' ? 'selected' : ''}}>Poli Bedah</option>
                                        <option value="Poli Paru" {{$rotasi->uk_sblm == 'Poli Paru' ? 'selected' : ''}}>Poli Paru</option>
                                        <option value="Poli Penyakit Dalam" {{$rotasi->uk_sblm == 'Poli Penyakit Dalam' ? 'selected' : ''}}>Poli Penyakit Dalam</option>
                                        <option value="Poli Anak" {{$rotasi->uk_sblm == 'Poli Anak' ? 'selected' : ''}}>Poli Anak</option>
                                        <option value="Instalasi Laboratorium" {{$rotasi->uk_sblm == 'Instalasi Laboratorium' ? 'selected' : ''}}>Instalasi Laboratorium</option>
                                        <option value="Instalasi Gawat Darurat (IGD)" {{$rotasi->uk_sblm == 'Instalasi Gawat Darurat (IGD)' ? 'selected' : ''}}>Instalasi Gawat Darurat (IGD)</option>
                                        <option value="Instalasi Radiologi" {{$rotasi->uk_sblm == 'Instalasi Radiologi' ? 'selected' : ''}}>Instalasi Radiologi</option>
                                        <option value="Intensive Care Unit (ICU)" {{$rotasi->uk_sblm == 'Intensive Care Unit (ICU)' ? 'selected' : ''}}>Intensive Care Unit (ICU)</option>
                                        <option value="Instalasi Rawat Jalan" {{$rotasi->uk_sblm == 'Instalasi Rawat Jalan' ? 'selected' : ''}}>Instalasi Rawat Jalan</option>
                                        <option value="Instalasi Rawat Inap Lt 4" {{$rotasi->uk_sblm == 'Instalasi Rawat Inap Lt 4' ? 'selected' : ''}}>Instalasi Rawat Inap Lt 4</option>
                                        <option value="Instalasi Rawat Inap Lt 5" {{$rotasi->uk_sblm == 'Instalasi Rawat Inap Lt 5' ? 'selected' : ''}}>Instalasi Rawat Inap Lt 5</option>
                                        <option value="IPSRS" {{$rotasi->uk_sblm == 'IPSRS' ? 'selected' : ''}}>IPSRS</option>
                                        <option value="Instalasi Rekam Medik" {{$rotasi->uk_sblm == 'Instalasi Rekam Medik' ? 'selected' : ''}}>Instalasi Rekam Medik</option>
                                        <option value="K3RS" {{$rotasi->uk_sblm == 'K3RS' ? 'selected' : ''}}>K3RS</option>
                                        <option value="Instalasi Gizi" {{$rotasi->uk_sblm == 'Instalasi Gizi' ? 'selected' : ''}}>Instalasi Gizi</option>
                                        <option value="Pendaftaran" {{$rotasi->uk_sblm == 'Pendaftaran' ? 'selected' : ''}}>Pendaftaran</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja Sesudah</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="uksesudah">
                                        <option value="Manajemen" {{$rotasi->uk_sesudah == 'Manajemen' ? 'selected' : ''}}>Manajemen</option>
                                        <option value="Poli Bedah" {{$rotasi->uk_sesudah == 'Poli Bedah' ? 'selected' : ''}}>Poli Bedah</option>
                                        <option value="Poli Paru" {{$rotasi->uk_sesudah == 'Poli Paru' ? 'selected' : ''}}>Poli Paru</option>
                                        <option value="Poli Penyakit Dalam" {{$rotasi->uk_sesudah == 'Poli Penyakit Dalam' ? 'selected' : ''}}>Poli Penyakit Dalam</option>
                                        <option value="Poli Anak" {{$rotasi->uk_sesudah == 'Poli Anak' ? 'selected' : ''}}>Poli Anak</option>
                                        <option value="Instalasi Laboratorium" {{$rotasi->uk_sesudah == 'Instalasi Laboratorium' ? 'selected' : ''}}>Instalasi Laboratorium</option>
                                        <option value="Instalasi Gawat Darurat (IGD)" {{$rotasi->uk_sesudah == 'Instalasi Gawat Darurat (IGD)' ? 'selected' : ''}}>Instalasi Gawat Darurat (IGD)</option>
                                        <option value="Instalasi Radiologi" {{$rotasi->uk_sesudah == 'Instalasi Radiologi' ? 'selected' : ''}}>Instalasi Radiologi</option>
                                        <option value="Intensive Care Unit (ICU)" {{$rotasi->uk_sesudah == 'Intensive Care Unit (ICU)' ? 'selected' : ''}}>Intensive Care Unit (ICU)</option>
                                        <option value="Instalasi Rawat Jalan" {{$rotasi->uk_sesudah == 'Instalasi Rawat Jalan' ? 'selected' : ''}}>Instalasi Rawat Jalan</option>
                                        <option value="Instalasi Rawat Inap Lt 4" {{$rotasi->uk_sesudah == 'Instalasi Rawat Inap Lt 4' ? 'selected' : ''}}>Instalasi Rawat Inap Lt 4</option>
                                        <option value="Instalasi Rawat Inap Lt 5" {{$rotasi->uk_sesudah == 'Instalasi Rawat Inap Lt 5' ? 'selected' : ''}}>Instalasi Rawat Inap Lt 5</option>
                                        <option value="IPSRS" {{$rotasi->uk_sesudah == 'IPSRS' ? 'selected' : ''}}>IPSRS</option>
                                        <option value="Instalasi Rekam Medik" {{$rotasi->uk_sesudah == 'Instalasi Rekam Medik' ? 'selected' : ''}}>Instalasi Rekam Medik</option>
                                        <option value="K3RS" {{$rotasi->uk_sesudah == 'K3RS' ? 'selected' : ''}}>K3RS</option>
                                        <option value="Instalasi Gizi" {{$rotasi->uk_sesudah == 'Instalasi Gizi' ? 'selected' : ''}}>Instalasi Gizi</option>
                                        <option value="Pendaftaran" {{$rotasi->uk_sesudah == 'Pendaftaran' ? 'selected' : ''}}>Pendaftaran</option>
                                    </select>
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
