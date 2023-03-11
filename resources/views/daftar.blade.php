<!DOCTYPE html>
<html lang="en">
<body>
<meta name="csrf-token" content="{{csrf_token()}}">
<?php
$id = $nama = $email = $email_verified_at = $password = $remember_token = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $nama = test_input($_POST["$nama"]);
  $email = test_input($_POST["$email"]);
  $email_verified_at = test_input($_POST["$email_verified_at"]);
  $password = test_input($_POST["$password"]);
  $remember_token = test_input($_POST["$remember_token"]);
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>REGISTER</title>

   <!-- Favicons -->
  <link href="Green/assets/img/favicon.png" rel="icon">
  <link href="Green/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="/login" class="h1"><b>Register</b></a>
    </div>
    <div class="card-body">

      <form id="registeruser" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control"name="name"  placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control"name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" id="button-save" class="btn btn-primary btn-block">Register</button>
          </div>

<!-- /.col -->
        </div>
      </form>
        <a href="/login" class="text-center">Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      $('#button-save').on('click', function(e){
          e.preventDefault();
          $.ajax({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              method : 'POST',
              url  : 'http://127.0.0.1:8000/register',
              data : $('#registeruser').serialize(),

          success : function(response){
            alert('Register Berhasil');
            window.location.href = "/login"
          },
          error: function(xhr){
            alert('Gagal Register');
          }
      });
    });
  </script>
