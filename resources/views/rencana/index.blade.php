@extends('adminlte::page')

@section('title', 'Rencana Pengembangan')

@section('content_header')
<h1>Rencana Pengembangan Pegawai RSK Paru</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <a href="{{route('rencana.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Program</th>
                    <th>Program</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($rencana_peng as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->kd_program}}</td>
                        <td>{{$data->program}}</td>
                        <td>{{$data->volume}}</td>
                        <td>{{$data->satuan}}</td>
                        <td>{{$data->harga_satuan}}</td>
                        <td>{{$data->jmlh}}</td>
                        <td align="center">
                            <a href="{{route('rencana.edit',[$data->kd_program])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">         
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>         
                            <a href="/rencana/hapus/{{$data->kd_program}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">         
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            <a href="{{route('rencana.show',[$data->kd_program])}}"class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">         
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
