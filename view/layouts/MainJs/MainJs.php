<!-- jQuery -->
<script src="../../public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../public/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../public/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../public/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../public/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../public/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../public/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../public/adminlte/plugins/moment/moment.min.js"></script>
<script src="../../public/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../public/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../public/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../public/adminlte/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/adminlte/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/adminlte/js/pages/dashboard.js"></script>
<!-- Full Calendar 5.11.3 -->
<?php 
    if(isset($_GET['pagina'])){
      $caso = $_GET['pagina'];
      switch($caso){
        case "Eventos-Vacaciones":
?>
          <script src="../../view/pages/Eventos-Vacaciones/calendarioVacaciones.js"></script>
<?php
        break;
        case "Eventos-ActividadesVarias":
?>
          <script src="../../view/pages/Eventos-ActividadesVarias/calendarioActVarias.js"></script>
<?php
        break;
        case "Noticias-NoticiasCorporativas-Informacion":
?>
          <script src="../../view/pages/Noticias-NoticiasCorporativas-Informacion/NoticiasCorporativasInformacion.js"></script>
<?php
        break;
      }
    }
?>
