<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAYANAN TI | PT.PUPUK SRIWIDJAJA PALEMBANG</title>

    <!-- Favicons -->
    <link href="Green/assets/img/favicon.png" rel="icon">
    <link href="Green/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-lg navbar-info navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <div class="py-2" style="color: rgb(47, 133, 139); margin-right:5px;"><strong>Selamat Datang</strong></div>
                <li class="c-header-nav-item dropdown"></li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="logout" href="/" role="button">
                        <i class='fas fa-sign-out-alt'></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img class="img-circle elevation-2" src="img/pusri.png" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Layanan TI</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='fas fa-laptop-house'></i>
                                <p>Perangkat
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="Fperangkat">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Perangkat</p>
                                    </a>
                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="pk">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Perangkat</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='fas fa-laptop-house'></i>
                                <p>Unit Kerja
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="unitkerja" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Unit Kerja</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="uk" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Unit Kerja</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='fas fa-laptop-house'></i>
                                <p>Master Tindakan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="fmt" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Master Tindakan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mt" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Master Tindakan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='fas fa-laptop-house'></i>
                                <p>Master Status Perangkat
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="fmsp" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Master Status Perangkat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="msp" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Master Status Perangkat</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                @include('form.formmsp')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- jQuery -->
            <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
