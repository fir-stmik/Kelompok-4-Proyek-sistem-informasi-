<?php
session_start();

require_once "koneksi.php";

if (isset($_POST['login']) &&  $_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  if(!empty($username) && !empty($password)) {
    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username ' AND password = '$password' ");
    
    if (mysqli_num_rows($query) > 0) {
      $_SESSION['user'] = mysqli_fetch_assoc($query);
      header("Location: dashboard.php");
      exit();
    } else {
      $error = "username atau password salah";
    }
  } else {
    $error = 'username dan password tidak boleh kosong';
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">

    <!-- /.login-logo -->
    <?php if (isset($error)): ?>
      <div style="font-size: 1rem;" class="alert alert-danger text-center" role="alert">
        <?= $error ?>
      </div>
    <?php endif; ?>
    <div class="card">
      <div class="login-logo">
        <h3 style="margin-top: 10px;">Halaman Login</h3>
      </div>
      <div class="card-body login-card-body">
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4" style="margin: auto; max-width: 50%;">
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
      </div>
      <!-- firman abdullah  HAS -->
      </form>


      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>