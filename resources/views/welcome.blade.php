<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width: 100% !important;">
  <div class="card">
    <div class="card-body ">

        <form action="{{ route('reponse.store') }}" method="POST">
            {{ csrf_field() }}

<div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label>Votre Nom</label>
                <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"  required>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label>Votre Prenom</label>
                <input type="text" name="prenom"  value="{{ old('prenom') }}" class="form-control"  required>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label>Votre email</label>
                <input type="email" name="email"  value="{{ old('email') }}" class="form-control"  required>
            </div>
        </div>
        <h5 style="color: red"> NB: 3 = Toujours vrai  /  2 = Souvent vrai  /  1 = Parfois vrai  / 0 = Jamais vrai</h5>
        <hr>
        @foreach ( $questions as $question )
        <div class="col-lg-6">
            <div class="form-group">
                <label>{{ $question->intitule }}</label>
                <select class="form-control" name="reponses[]" required="">
                    <option value="">Faites un choix</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <input type="hidden" name="questions_id[]" value="{{ $question->id }}">
            </div>
        </div>
        @endforeach

    </div>

        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
