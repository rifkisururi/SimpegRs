@extends('adminlte::page')

@section('title', 'Data Cuti')

@section('content_header')
<h1>Data Cuti</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
               <a href="{{route('cuti.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Cuti</th>
                    <th>NIK Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Pengajuan</th>
                    <th>Jumlah Cuti (Hari)</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($cuti as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->kd_cuti}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->nm_pegawai}}</td>
                        <td>{{$data->tgl_pengajuan}}</td>
                        <td>{{$data->jenis_pengajuan}}</td>
                        <td>{{$data->cuti_diajukan}}</td>
                        <td align="center">
                            <a href="{{route('cuti.edit',[$data->kd_cuti])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">         
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>         
                            <a href="/cuti/hapus/{{$data->kd_cuti}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">         
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            <a href="{{route('cuti.show',[$data->kd_cuti])}}"class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">         
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
