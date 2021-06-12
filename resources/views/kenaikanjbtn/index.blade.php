@extends('adminlte::page')

@section('title', 'Kenaikan Jabatan')

@section('content_header')
<h1>Kenaikan Jabatan Pegawai RSK Paru</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Unit Kerja</th>
                    <th>Jabatan Sebelum</th>
                    <th>Jabatan Sesudah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  </tbody>
                </table>
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
    $('#tblMaster').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
})
</script>
@stop
