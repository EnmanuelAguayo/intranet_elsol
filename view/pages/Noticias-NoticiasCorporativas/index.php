<?php

$banners = array("izq" => 8, "der" => 4);
$sub_banners = 12;
$itemBody = 4;






?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Noticias Corporativas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Noticias</li>
            <li class="breadcrumb-item active">Noticias Corporativas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Noticias banner left -->
        <div class="<?php echo 'col-md-' . $banners['izq']; ?>">
          <div id="carouselExampleCaptions" style class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="../../public/adminlte/img/photo1.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="Noticias-NoticiasCorporativas-Informacion" class="link text-white">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </a>
                  </div>
                </div>
              <div class="carousel-item">
                <img src="../../public/adminlte/img/photo2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="Noticias-NoticiasCorporativas-Informacion" class="link text-white">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../../public/adminlte/img/photo3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="Noticias-NoticiasCorporativas-Informacion" class="link text-white">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
        <!-- /. Noticias banner -->
        <!-- Noticias banner right-->
        <div class="<?php echo 'col-md-' . $banners['der']; ?>">
          <div class="row">
            <div class="col-md-12">
              <a href="Noticias-NoticiasCorporativas-Informacion">
                <div class="card bg-dark text-white">
                  <img src="../../public/adminlte/img/photo4.jpg" class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                    <p class="card-text text-truncate">
                      Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                      oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                    </p>
                    <p class="card-text">hace 3 minutos</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-12">
              <a href="Noticias-NoticiasCorporativas-Informacion">
                <div class="card bg-dark text-white">
                  <img src="../../public/adminlte/img/photo4.jpg" class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                    <p class="card-text text-truncate">
                      Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                      oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                    </p>
                    <p class="card-text">hace 3 minutos</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- /. Noticias banner right -->
      </div>
      <!-- Noticias cuerpo -->
      <div class="row">
        <div class="<?php echo 'col-md-' . $itemBody; ?>">
          <a href="Noticias-NoticiasCorporativas-Informacion">
            <div class="card bg-dark text-white">
              <img src="../../public/adminlte/img/photo1.png" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                <p class="card-text text-truncate">
                  Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                  oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                </p>
                <p class="card-text">hace 3 minutos</p>
              </div>
            </div>
          </a>
        </div>
        <div class="<?php echo 'col-md-' . $itemBody; ?>">
          <a href="Noticias-NoticiasCorporativas-Informacion">
            <div class="card bg-dark text-white">
              <img src="../../public/adminlte/img/photo2.png" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                <p class="card-text text-truncate">
                  Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                  oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                </p>
                <p class="card-text">hace 3 minutos</p>
              </div>
            </div>
          </a>
        </div>
        <div class="<?php echo 'col-md-' . $itemBody; ?>">
          <a href="Noticias-NoticiasCorporativas-Informacion">
            <div class="card bg-dark text-white">
              <img src="../../public/adminlte/img/photo3.jpg" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                <p class="card-text text-truncate">
                  Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                  oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                </p>
                <p class="card-text">hace 3 minutos</p>
              </div>
            </div>
          </a>
        </div>
        <div class="<?php echo 'col-md-' . $itemBody; ?>">
          <a href="Noticias-NoticiasCorporativas-Informacion">
            <div class="card bg-dark text-white">
              <img src="../../public/adminlte/img/photo4.jpg" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title"><strong>Garant&iacute;a de Mantenimiento de Oferta</strong></h5>
                <p class="card-text text-truncate">
                  Es un tipo de Seguro de Caución garantiza al Asegurado la seriedad de la propuesta de
                  oferta presentada por el Tomador, manteniendo los precios, la calidad y el tiempo.
                </p>
                <p class="card-text">hace 3 minutos</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- /. Noticias cuerpo -->
      <!-- paginacion -->
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center h4">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /. paginacion-->
    </div>
  </section>