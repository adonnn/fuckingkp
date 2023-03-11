<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAYANAN TI | PT.PUPUK SRIWIDJAJA PALEMBANG</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="Green/assets/img/favicon.png" rel="icon">
    <link href="Green/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">

    <!-- MULAI STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8f7cff5ee7757412879aedf3efbfaee01">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <!-- AKHIR STYLE CSS -->
    <style>
        div.dataTables_wrapper {
            width: 1000px;
            margin: 0 auto;
        }

    </style>
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
                <!-- MULAI CONTAINER -->
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">DAFTAR MASTER STATUS PERANGKAT</h3>
                        </div>
                        <div class="card-body">
                            <!-- MULAI DATE RANGE PICKER -->
                            <div class="row input-daterange">
                                <div class="col-md-4">
                                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                                </div>
                                <div class="col-md-4">
                                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                                    <button type="button" name="refresh" id="refresh" class="btn btn-info">Refresh</button>
                                </div>
                            </div>
                            <!-- AKHIR DATE RANGE PICKER -->
                            <br>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <div class=" display nowrap" style="width:100%">
                                <table class="table table-responsive text-nowrap  table-striped table-bordered" id="msp">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>ID STATUS PERANGKAT</th>
                                            <th>DESKRIPSI STATUS</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="modal fade" id="msp-modal" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mspModal"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="javascript:void(0)" id="mspForm" name="mspForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="id" id="id">
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label">ID STATUS PERANGKAT</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="ID_STATUS_PERANGKAT" name="ID_STATUS_PERANGKAT" placeholder="Enter Id Status Perangkat" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-12 control-label">DESKRIPSI STATUS</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="DESKRIPSI_STATUS" name="DESKRIPSI_STATUS" placeholder="Enter Deskripsi Status" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary" id="btn-save">Save changes
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
    <!-- AKHIR CONTAINER -->
    <!-- jQuery -->
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

    <!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js" integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

    <!-- Download File-->
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <!-- MULAI DATEPICKER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>


    <!-- JAVASCRIPT -->
    <script>
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //jalankan function load_data diawal agar data ter-load
            load_data();

            //Iniliasi datepicker pada class input
            $('.input-daterange').datepicker({
                todayBtn: 'linked'
                , format: 'yyyy-mm-dd'
                , autoclose: true
            });

            $('#filter').click(function() {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#msp').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });

            $('#refresh').click(function() {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#msp').DataTable().destroy();
                load_data();
            });

            //LOAD DATATABLE
            //script untmsp memanggil data json dari server dan menampilkannya berupa datatable
            //load data menggunakan parameter tanggal dari dan tanggal hingga
            function load_data(from_date = '', to_date = '') {
                $('#msp').DataTable({
                    dom: 'Bfltip'
                    , buttons: [
                        'excel'
                    ]
                    , scrollX: true
                    , processing: true
                    , serverSide: true, //aktifkan server-side 
                    ajax: {
                        url: "{{ url('msp') }}"
                        , type: 'GET'
                        , data: {
                            from_date: from_date
                            , to_date: to_date
                        } //jangan lupa kirim parameter tanggal 
                    }
                    , columns: [{
                            data: 'id'
                            , name: 'id'
                        }
                        , {
                            data: 'ID_STATUS_PERANGKAT'
                            , name: 'ID_STATUS_PERANGKAT'
                        }
                        , {
                            data: 'DESKRIPSI_STATUS'
                            , name: 'DESKRIPSI_STATUS'
                        }
                        , {
                            data: 'created_at'
                            , name: 'created_at'
                        }
                        , {
                            data: 'action'
                            , name: 'action'
                            , orderable: false
                        }
                    , ]
                    , order: [
                        [0, 'asc']
                    ]
                });
            }
        });

        function add() {
            $('#mspForm').trigger("reset");
            $('#mspModal').html("Add msp");
            $('#msp-modal').modal('show');
            $('#id').val('');
        }

        function editFunc(id) {
            $.ajax({
                type: "POST"
                , url: "{{ url('edit-msp') }}"
                , data: {
                    id: id
                }
                , dataType: 'json'
                , success: function(res) {
                    $('#mspModal').html("Edit Form Master Status Perangkat");
                    $('#msp-modal').modal('show');
                    $('#id').val(res.id);
                    $('#ID_STATUS_PERANGKAT').val(res.ID_STATUS_PERANGKAT);
                    $('#DESKRIPSI_STATUS').val(res.DESKRIPSI_STATUS);
                }
            });
        }

        function deleteFunc(id) {
            if (confirm("Delete Record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type: "POST"
                    , url: "{{ url('delete-msp') }}"
                    , data: {
                        id: id
                    }
                    , dataType: 'json'
                    , success: function(res) {
                        var oTable = $('#msp').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        }
        $('#mspForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST'
                , url: "{{ url('store-msp')}}"
                , data: formData
                , cache: false
                , contentType: false
                , processData: false
                , success: (data) => {
                    $("#msp-modal").modal('hide');
                    var oTable = $('#msp').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                }
                , error: function(data) {
                    console.log(data);
                }
            });
        });

    </script>
    <!-- JAVASCRIPT -->
</body>
</html>
