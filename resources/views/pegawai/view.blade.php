@extends('adminlte::page')

@section('title', 'Data Pegawai')

@section('content_header')
<h1>Data Pegawai</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('pegawai.update',[$pegawai->nik])}}" method="POST">@csrf
          <input type="hidden" name="_method" value="PUT">
            <div class="card">
              {{-- <div class="card-header">
                <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table width="100%" border="0">
                            <tr>
                                <td width="160">NIK</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->nik}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Nama Pegawai</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->nm_pegawai}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->tempat_lhr}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>
                                    {{date("Y-m-d", strtotime($pegawai->tgl_lhr))}}
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->j_kelamin}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td>
                                   {{$pegawai->alamat}}
                                </td>
                            </tr>

                            <tr>    
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->no_telp}}
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Tenaga</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->jenis_tenaga}}
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->unit_kerja}}
                                </td>
                            </tr>

                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->jbtn_skrng}}
                                </td>
                            </tr>

                            <tr>
                                <td>Status Pegawai</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->st_pegawai}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td>
                                   {{$pegawai->pend_terakhir}}
                                </td>
                            </tr>

                            <tr>    
                                <td>Tahun Lulus</td>
                                <td>:</td>
                                <td>
                                    {{$pegawai->tahun_lulus}}
                                </td>
                            </tr>
                        </table> 
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <!-- tombol goto edit 
                <div class="row" style="margin-top:10px">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit"> Edit</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                -->
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
$(function () {
})
</script>
@stop
