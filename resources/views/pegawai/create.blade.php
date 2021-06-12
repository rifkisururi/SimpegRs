@extends('adminlte::page')

@section('title', 'Input Data Pegawai')

@section('content_header')
<h1>Input Data Pegawai</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('pegawai.store')}}" method="POST">@csrf
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
                                    <input type="text" required name="nik" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Nama Pegawai</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required name="nama" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required name="tempatlhr" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>
                                    <input type="date" required name="tgllhr" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="jkelamin">
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" required name="alamat"></textarea>
                                </td>
                            </tr>

                            <tr>    
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" name="telp">
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Tenaga</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="jtenaga">
                                        <option value="Dokter">Dokter</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="unitkerja">
                                        <option value="IGD">IGD</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required class="form-control" name="jbtn">
                                </td>
                            </tr>

                            <tr>
                                <td>Status Pegawai</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="stpegawai">
                                        <option value="Kontrak">Kontrak</option>
                                        <option value="Magang">Magang</option>
                                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                                        <option value="PNS">PNS</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>    
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required class="form-control" name="pend">
                                </td>
                            </tr>

                            <tr>    
                                <td>Tahun Lulus</td>
                                <td>:</td>
                                <td>
                                @php
                                    $already_selected_value = 2021;
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
$(function () {
})
</script>
@stop
