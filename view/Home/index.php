<?php

  require_once("../../config/conexion.php");
  require_once("../../config/names.php");
  $title = new Names();

  if(isset($_SESSION['usu_id']))
  {
    

?>


<!DOCTYPE html>
<html lang="es">

<head>

  <?php require_once "../layouts/MainHead/MainHead.php";?>
  
  <title><?php echo $title->names();?></title>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../public/adminlte/img/logo-elsol.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php require_once "../layouts/MainNavbar/MainNavbar.php";?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once "../layouts/MainAside/MainAside.php";?>

  <!-- Dinamic Contents -->
    <?php require_once "../layouts/MainDinamicContents/MainDinamicContents.php";?>
  <!-- /.Dinamic Contents --> 
  
  <!-- Main Footer -->
  <?php require_once "../layouts/MainFooter/MainFooter.php"?>
  <!-- / .Main Footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- scripts -->
<?php require_once "../layouts/MainJs/MainJs.php";?>
</body>
</html>
<?php
  }else{
    header("Location: " . Conexion::ruta() . "view");
  }

?>