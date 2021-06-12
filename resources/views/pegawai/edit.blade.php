@extends('adminlte::page')

@section('title', 'Edit Data Pegawai')

@section('content_header')
<h1>Edit Data Pegawai</h1>
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
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table width="100%" border="0">
                            <tr>
                                <td width="150">NIK</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$pegawai->nik}}" required disabled name="nik" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Nama Pegawai</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$pegawai->nm_pegawai}}" required name="nama" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$pegawai->tempat_lhr}}" required name="tempatlhr" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>
                                    <input type="date" value="{{date("Y-m-d", strtotime($pegawai->tgl_lhr))}}" required name="tgllhr" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="jkelamin">
                                        <option value="Perempuan" {{$pegawai->j_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                        <option value="Laki-Laki" {{$pegawai->j_kelamin == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" required name="alamat">{{$pegawai->alamat}}</textarea>
                                </td>
                            </tr>

                            <tr>    
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>
                                    <input type="number" value="{{$pegawai->no_telp}}" required class="form-control" name="telp">
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Tenaga</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="jtenaga">
                                        <option value="Dokter" {{$pegawai->jenis_tenaga == 'Dokter' ? 'selected' : ''}}>Dokter</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="unitkerja">
                                        <option value="IGD" {{$pegawai->unit_kerja == 'IGD' ? 'selected' : ''}}>IGD</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$pegawai->jbtn_skrng}}" required class="form-control" name="jbtn">
                                </td>
                            </tr>

                            <tr>
                                <td>Status Pegawai</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="stpegawai">
                                        <option value="Kontrak" {{$pegawai->st_pegawai == 'Kontrak' ? 'selected' : ''}}>Kontrak</option>
                                        <option value="Magang" {{$pegawai->st_pegawai == 'Magang' ? 'selected' : ''}}>Magang</option>
                                        <option value="Pegawai Tetap" {{$pegawai->st_pegawai == 'Pegawai tetap' ? 'selected' : ''}}>Pegawai Tetap</option>
                                        <option value="PNS" {{$pegawai->st_pegawai == 'PNS' ? 'selected' : ''}}>PNS</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td>
                                    <input type="text" value="{{$pegawai->pend_terakhir}}" required class="form-control" name="pend">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tahun Lulus</td>
                                <td>:</td>
                                <td>
                                @php
                                    $already_selected_value = $pegawai->tahun_lulus;
                                    $earliest_year = 1980;
                                    print '<select name="thnlulus" class="form-control" >';
                                    foreach (range(date('Y'), $earliest_year) as $x) {
                                        print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';
                                @endphp
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
$(function () {
})
</script>
@stop
