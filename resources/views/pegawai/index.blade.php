@extends('adminlte::page')

@section('title', 'Data Pegawai')

@section('content_header')
<h1>Data Pegawai</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <a href="{{route('pegawai.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblMaster" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis Kelamin</th>
                    <th>Jenis Tenaga</th>
                    <th>Unit Kerja</th>
                    <th>Status Pegawai</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                <tbody>
                @foreach($pegawai as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->nm_pegawai}}</td>
                        <td>{{$data->j_kelamin}}</td>
                        <td>{{$data->jenis_tenaga}}</td>
                        <td>{{$data->unit_kerja}}</td>
                        <td>{{$data->st_pegawai}}</td>
                        <td align="center">
                            <a href="{{route('pegawai.edit',[$data->nik])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">         
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>         
                            <a href="/pegawai/hapus/{{$data->nik}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">         
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            <a href="{{route('pegawai.show',[$data->nik])}}"class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">         
                            <i class="fas fa-eye fa-sm text-white-50"></i> View</a>          
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" datadismiss="modal"> Batal</button>
                <input type="submit" class="btn btn-primary btn-send" value="Simpan">
            </div>
            </div>
         </form>
        </div>
    </div>
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
