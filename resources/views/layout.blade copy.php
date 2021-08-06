<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title>AdminLTE 6 | Dashboard</title> -->
     <title>PELL</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <script src="{!! asset('assets/plugins/jquery/jquery.min.js') !!}"></script>
    <link rel="stylesheet" href="{!! asset('assets/plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('assets/dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/daterangepicker/daterangepicker.css') !!}">
    <!-- summernote -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/summernote/summernote-bs4.css') !!}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css"></script>  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"></script>  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

    <script src=https://cdn.datatables.net/plug-ins/1.10.20/i18n/French.json></script>

    @yield('calendar')
    @yield('carte')
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">TABLEAU DE BORD</a>
            </li>

        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->



            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="dropdown-item" href="#"
                   onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                    {{ __('Déconnexion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>


            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-info elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">ENDA ECOPOP</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">

                    <a href="#" class="d-block">Ibra Ndiaye</a>

                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{ route('home') }}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>

                    </li>


                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-map-marked-alt"></i>

                            <p>
                                Région
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('region.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ajouter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('region.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>lister</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-map-marked-alt"></i>

                            <p>
                                Departement
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('departement.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ajouter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('departement.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>lister</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-map-marked-alt"></i>

                            <p>
                                Categorie
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('categorie.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ajouter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categorie.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>lister</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-map-marked-alt"></i>

                            <p>
                                Question
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('question.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ajouter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('question.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>lister</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-map-marked-alt"></i>

                            <p>
                                Petite Question
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('petitequestion.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ajouter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('petitequestion.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>lister</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    @yield('content')

    <!-- Content Wrapper. Contains page content -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> -->
        <strong>Copyright &copy; 2019-2020 | <a href="">ENDA ECOPOP</a> | </strong>

        Tous droits réservés.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 00.0.2020
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('assets/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{!! asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- ChartJS -->
<script src="{!! asset('assets/plugins/chart.js/Chart.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('assets/plugins/sparklines/sparkline.js') !!}"></script>
<!-- JQVMap -->
{{--  <script src="{!! asset('assets/plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
<script src="{!! asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>  --}}
<!-- jQuery Knob Chart -->
<script src="{!! asset('assets/plugins/jquery-knob/jquery.knob.min.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('assets/plugins/moment/moment.min.js') !!}"></script>
<script src="{!! asset('assets/plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{!! asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
<!-- Summernote -->
<script src="{!! asset('assets/plugins/summernote/summernote-bs4.min.js') !!}"></script>
<!-- overlayScrollbars -->
<script src="{!! asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('assets/dist/js/adminlte.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('assets/dist/js/pages/dashboard.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('assets/dist/js/demo.js') !!}"></script>


<!-- DataTables -->
<script src="{!! asset('assets/plugins/datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') !!}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
            }
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false

        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
@yield('script')
</body>
</html>
