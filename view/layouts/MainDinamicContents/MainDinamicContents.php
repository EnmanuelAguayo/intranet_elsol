 <?php
    if (isset($_GET['pagina'])) {
      if (
        $_GET['pagina'] == "Perfil"    or
        $_GET['pagina'] == "Dashboard" or
        $_GET['pagina'] == 'Noticias-NoticiasCorporativas' or
        $_GET['pagina'] == "Noticias-NoticiasCorporativas-Informacion" or
        $_GET['pagina'] == "Noticias-Sol24hs"       or
        $_GET['pagina'] == "Noticias-ComunicacionesInternas" or
        $_GET['pagina'] == "Noticias-ComunicacionesInternas-Informacion" or
        $_GET['pagina'] == "Eventos-EventosEspeciales" or
        $_GET['pagina'] == "Eventos-Vacaciones" or
        $_GET['pagina'] == "Eventos-ActividadesVarias" or
        $_GET['pagina'] == "Contactos" or
        $_GET['pagina'] == "DocumentosCorporativos"
      ) {
        include "../../view/pages/" . $_GET['pagina'] . "/" . "index.php";
      }
    }
  ?>
  
 </div>