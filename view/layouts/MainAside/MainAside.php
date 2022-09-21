  <aside class="main-sidebar sidebar-light-navy elevation-4">
    <!-- Brand Logo -->
    <a href="Dashboard" class="brand-link">
      <img src="../../public/adminlte/img/logo-elsol.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Intranet_Sol</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../public/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="Perfil" class="d-block" alt><?php echo $_SESSION['usu_name'] . " " . $_SESSION['usu_lastname'];?></a>
        </div>
        </br>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Dashboard -->
          <li class="nav-item <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Dashboard'){echo 'menu-open';}}?>">
            <a href="#" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Dashboard'){echo 'active';}}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Dashboard" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Dashboard'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /. Dashboard -->
          <!-- Noticias -->
          <li 
              class="nav-item 
                    <?php 
                          if(isset($_GET['pagina'])){
                            if(
                                $_GET['pagina'] == 'Noticias-NoticiasCorporativas' or
                                $_GET['pagina'] == 'Noticias-NoticiasCorporativas-Informacion' or
                                $_GET['pagina'] == 'Noticias-Sol24hs' or 
                                $_GET['pagina'] == 'Noticias-ComunicacionesInternas'
                              ){echo 'menu-open';}}?>">
            <a href="#" class="nav-link 
                    <?php 
                          if(isset($_GET['pagina'])){
                            if(
                              $_GET['pagina'] == 'Noticias-NoticiasCorporativas' or
                              $_GET['pagina'] == 'Noticias-NoticiasCorporativas-Informacion' or
                              $_GET['pagina'] == 'Noticias-Sol24hs' or 
                              $_GET['pagina'] == 'Noticias-ComunicacionesInternas'
                            ){echo 'active';}}?>">
              <i class="nav-icon fa-regular fa-newspaper"></i>
              <p>
                Noticias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Noticias-NoticiasCorporativas" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Noticias-NoticiasCorporativas' or $_GET['pagina'] == 'Noticias-NoticiasCorporativas-Informacion'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Noticias Corporativas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Noticias-Sol24hs" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Noticias-Sol24hs'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>El Sol 24hs</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Noticias-ComunicacionesInternas" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Noticias-ComunicacionesInternas'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Com. Internas</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /. Noticias -->
          <!-- Eventos -->
          <li class="nav-item 
              <?php 
                if(isset($_GET['pagina'])){
                  if(
                      $_GET['pagina'] == 'Eventos-EventosEspeciales' or
                      $_GET['pagina'] == 'Eventos-Vacaciones' or
                      $_GET['pagina'] == 'Eventos-ActividadesVarias'
                    ){echo 'menu-open';}}?>">
            <a href="#" class="nav-link 
                <?php 
                  if(isset($_GET['pagina'])){
                    if(
                      $_GET['pagina'] == 'Eventos-EventosEspeciales' or
                      $_GET['pagina'] == 'Eventos-Vacaciones' or
                      $_GET['pagina'] == 'Eventos-ActividadesVarias'
                      ){echo 'active';}}?>">
              <i class="nav-icon fa-solid fa-calendar-check"></i>
              <p>
                Eventos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Eventos-EventosEspeciales" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Eventos-EventosEspeciales'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eventos Especiales</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Eventos-Vacaciones" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Eventos-Vacaciones'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vacaciones</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Eventos-ActividadesVarias" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Eventos-ActividadesVarias'){echo 'active';}}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actividades Varias</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /. Eventos -->
          <!-- Contactos-->
          <li class="nav-item">
            <a href="Contactos" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'Contactos'){echo 'active';}}?>">
              <i class="nav-icon fa-solid fa-address-book"></i> Contactos
            </a>
          </li>
          <!-- /. Contactos-->
          <!-- Documentos Corporativos -->
          <div class="nav-item">
            <a href="DocumentosCorporativos" class="nav-link <?php if(isset($_GET['pagina'])){if($_GET['pagina'] == 'DocumentosCorporativos'){echo "active";}}?>">
              <i class="nav-icon fa-solid fa-file"></i> Documentos Corporativos
            </a>
          </div>
          <!-- /. Documentos Corporativos -->
          <!-- Sesion -->
          <li class="nav-header">SESION</li>
          <li class="nav-item">
            <a href="../pages/Logout" class="nav-link"><i class="nav-icon far fa-solid fa-power-off"></i> 
            <p>Salir</p> 
          </a>
          </li>
        </ul> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>