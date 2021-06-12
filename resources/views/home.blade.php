@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Sistem Informasi Manajemen Kepegawaian RS</p>
<div class="row">
<div class="col-md-6">
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pegawai Berdasarkan Jenis Kelamin</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              
<canvas id="myChart" width="400" height="400"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
</div>
<div class="col-md-6">
<!-- chart -->

</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
var ctx = document.getElementById('myChart').getContext('2d');
let pria = <?= $pria ?>;
let perempuan = <?= $perempuan ?>;
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Perempuan', 'Laki-Laki'],
        datasets: [{
            label: '# of Votes',
            data: [perempuan, pria],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@stop
