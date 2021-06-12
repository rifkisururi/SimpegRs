@extends('adminlte::page')

@section('title', 'Input Rencana Pengembangan')

@section('content_header')
<h1>Input Rencana Kegiatan Pengembangan
Pegawai RSK Paru</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- form start -->
        <form action="{{route('rencana.store')}}" method="POST">@csrf
            <div class="card">
              {{-- <div class="card-header">
                <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <table width="100%" border="0">
                            <tr>
                                <td width="150">Kode Program</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required name="kdprog" class="form-control">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="nik" id="nik" class="form-control">
                                </td>
                                <td colspan="2"></td>
                                <td>Nama</td>
                                <td>:</td>
                                <td width="35%">
                                    <input type="text" name="nama" id="nama" disabled class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Program</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" required name="program"></textarea>
                                </td>
                            </tr>

                            <tr>    
                                <td>Volume</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" id="volume" name="volume">
                                </td>
                            </tr>

                             <tr>    
                                <td>Satuan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" required name="satuan" class="form-control">
                                </td>
                            </tr>

                            <tr>    
                                <td>Harga Satuan</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" id="harga_satuan" name="harga">
                                </td>
                            </tr>

                            <tr>    
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                    <input type="number" required class="form-control" name="jmlh" id="jumlah" value="0" readonly>
                                </td>
                            </tr>
                        </table> 
                    </div>
                    <div class="col-md-1"></div>
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
    $('#harga_satuan').keyup(function(){
        const volume = document.getElementById('volume').value;
        const harga_satuan = document.getElementById('harga_satuan').value;
        let total =  volume*harga_satuan;
        document.getElementById('jumlah').value = total;
    });
</script>
@stop

