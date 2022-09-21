<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Full Calendar 5.11.3 -->
<?php 
      if(isset($_GET['pagina'])){
        if(
            $_GET['pagina'] == 'Eventos-Vacaciones' or
            $_GET['pagina'] == 'Eventos-ActividadesVarias'
          ){
?>
          <link href='../../public/fullcalendar-5.11.3/lib/main.css' rel='stylesheet' />
          <script src='../../public/fullcalendar-5.11.3/lib/main.js'></script>
          <script src="../../public/fullcalendar-5.11.3/lib/locales-all.js"></script>
<?php
        }
      }
?>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome adminlte -->
<link rel="stylesheet" href="../../public/adminlte/plugins/fontawesome-free/css/all.min.css">
<!-- Font Awesome web -->
<script src="https://kit.fontawesome.com/1f8d63db97.js" crossorigin="anonymous"></script>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../../public/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="../../public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="../../public/adminlte/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../public/adminlte/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../../public/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../../public/adminlte/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="../../public/adminlte/plugins/summernote/summernote-bs4.min.css">