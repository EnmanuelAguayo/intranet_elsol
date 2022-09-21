<?php
  
  require_once("../config/conexion.php");
  require_once("../config/names.php");
  require_once("../models/UsersModels.php");

  
  $title = new Names();
  $sent = new Users();
  if(isset($_POST['enviar']) and $_POST['enviar'] == 'ok'){
    $login = new Users();
    $login->login();
  }

  if(isset($_SESSION['usu_id'])){
    header("Location: " . Conexion::ruta() . "view/Home/Dashboard");
  }



?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title->names(); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google recaptcha v2 -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../public/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../public/adminlte/plugins/toastr/toastr.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/adminlte/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="../docs/mockups/img/logo_elsol.jfif" width="30%" alt="">
      </div>
      <div class="card-body">
        <p class="login-box-msg"><a href="#" class="h3"><b>Intranet</b>ElSol</a></p>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="login_form">

                <?php 
                
                    if(isset($_GET['m'])){
                      switch($_GET['m']){
                        case "1":
                          ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oh no!</strong> Es probable que las credenciales est&eacute;n incorrectas.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                        break;
                        case "2":
                        ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Oh no!</strong> Por favor complete todos los datos.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                        break;
                        case "3":
                        ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Oh no!</strong> Por favor complete todos los datos y no olvide validar el captcha.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                        break;
                        case "4":
                        ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Oh no!</strong> Por favor Valide el Captcha
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                        }
                    }
                ?>

                   
          <div class="input-group mb-3">
            <input type="email" id="emailUser" name="emailUser" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="passUser" name="passUser" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mb-3">
              <div class="g-recaptcha" data-sitekey="6Lda_EUfAAAAAE9u7K2cQVxhc4MSVd2YLeCzbE-U"></div><br>
              <button type="submit" id="enviar" name="enviar" value="ok" class="btn btn-primary btn-block">Iniciar sesi&oacute;n</button>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <p class="mb-1">
                <a href="forgot-password.html">Olvide mi contrase&ntilde;a</a>
              </p>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../public/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../public/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../public/adminlte/plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../public/adminlte/js/adminlte.min.js"></script>
  
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    });
  </script>
</body>

</html>