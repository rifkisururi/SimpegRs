@extends('adminlte::page')

@section('title', 'Data Perjadin')

@section('content_header')
<h1>Data Perjalanan Dinas</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <a href="{{route('perjadin.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Perjadin</th>
                    <th>NIK Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal Berangkat</th>
                    <th>Tempat Dinas</th>
                    <th>Acara/Alasan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($perjadin as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->kd_perjadin}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->nm_pegawai}}</td>
                        <td>{{$data->tgl_berangkat}}</td>
                        <td>{{$data->tempat_dinas}}</td>
                        <td>{{$data->alsn_perjadin}}</td>
                        <td align="center">
                            <a href="{{route('perjadin.edit',[$data->kd_perjadin])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">         
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>         
                            <a href="/perjadin/hapus/{{$data->kd_perjadin}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">         
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            <a href="{{route('perjadin.show',[$data->kd_perjadin])}}"class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">         
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
