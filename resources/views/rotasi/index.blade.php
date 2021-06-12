@extends('adminlte::page')

@section('title', 'Rotasi Pegawai')

@section('content_header')
<h1>Rotasi Pegawai RSK Paru</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <a href="{{route('rotasi.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Rotasi</th>
                    <th>NIK Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Unit Kerja Sebelum</th>
                    <th>Unit Kerja Sesudah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($rotasi as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->kd_rotasi}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->nm_pegawai}}</td>
                        <td>{{$data->uk_sblm}}</td>
                        <td>{{$data->uk_sesudah}}</td>
                        <td align="center">
                            <a href="{{route('rotasi.edit',[$data->kd_rotasi])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">         
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>         
                            <a href="/rotasi/hapus/{{$data->kd_rotasi}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">         
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            <a href="{{route('rotasi.show',[$data->kd_rotasi])}}"class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">         
                            <i class="fas fa-eye fa-sm text-white-50"></i> View</a>          
                        </td>
                    </tr>
                @endforeach
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
