@extends('layout')
@section('title', '| personne')

@section('css')
  <link rel="stylesheet" href="{{ asset('js/chart.min.css') }}">
@endsection
@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">GESTION DES Personnes</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->

            <div class="row">
                @foreach ($tab as $ta)
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>{{ $ta->pourcentage }}%</h3>

                        <p>{{ $ta->nomc }}</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      {{-- <a href="#" class="small-box-footer">Projets en cours <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                @endforeach

              </div>
            </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
      <div class="card border-danger border-0">
          <div class="card-header bg-info text-center">Nombre de Soumision par categorie</div>
              <div class="card-body">
      <canvas id="myChart" width="200" height="200" style="height: 400px !important;"></canvas>
              </div>
      </div>

    </div>
    <div class="col-lg-6">
      <div class="card border-danger border-0">
          <div class="card-header bg-info text-center">Nombre de Soumision par categorie</div>
              <div class="card-body">
      <canvas id="pie" width="200" height="200" style="height: 400px !important;"></canvas>
              </div>
      </div>
    </div>
  </div>
<div class="col-12">
    <div class="card border-danger border-0">
        <div class="card-header bg-info text-center">Nom:  {{ $personne->prenom }}  {{ $personne->nom }} , Email: {{ $personne->email }}  </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Question</th>
                            <th>Reponse</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($personne->reponses as $reponse)
                        <tr>
                            <td>{{ $reponse->question_id }}</td>
                            <td>{{ $reponse->question->intitule }}</td>
                            <td>{{ $reponse->reponse }}</td>

                        </tr>
                        @if ( $loop->iteration %3==0)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>

@endsection
@section('script')
{{--  script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  --}}
<script>
var ctx1 = document.getElementById('pie').getContext('2d');
var ctx = document.getElementById('myChart').getContext('2d');
var label = [];
var donnee = [];
var color = [];
var labb =[];
window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(231,233,237)'
  };
var dynamicColors = function() {
var r = Math.floor(Math.random() * 255);
var g = Math.floor(Math.random() * 255);
var b = Math.floor(Math.random() * 255);
var e = 1;

return "rgba(" + r + "," + g + "," + b + ","+e + ")";
};
@foreach ($tab as $ta)
label.push('{{$ta->nomc}}' + ' {{$ta->pourcentage}}'+ '%');
donnee.push('{{$ta->pourcentage}}');
labb.push('{{$ta->nomc}}');
color.push(dynamicColors());
@endforeach

var myChart = new Chart(ctx, {
type: 'radar',
data: {
labels: label,
datasets: [{
    label: donnee,
    data: donnee,
    borderColor: window.chartColors.purple,
    pointBackgroundColor: window.chartColors.purple,

    borderWidth: 1
}]
},options: {
    scale: {
        ticks: {
          beginAtZero: true
        }
    }
}
});

var myChart = new Chart(ctx1, {
type: 'bar',
data: {
labels: labb,
datasets: [{
    label: 'label',
    data: donnee,
    backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(128, 128, 128 , 0.2)',
                'rgb(255, 205, 86, 0.2)',
                'rgb(0, 255, 0, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgb(128, 128, 128 , 1)',
                'rgb(255, 205, 86, 1)',
                'rgb(0, 255, 0, 1)'
            ],
    borderWidth: 1
}]
},
 options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
    }
});
</script>
@endsection
