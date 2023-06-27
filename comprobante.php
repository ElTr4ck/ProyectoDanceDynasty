<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Selecao Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/crudStyle.css">
  <link rel="stylesheet" href="assets/js/node_modules/sweetalert2/dist/sweetalert2.min.css">

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">Selecao</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Sobre Nosotros</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Servicios</a></li>
          <li><a class="nav-link scrollto " href="index.html#portfolio">Portafolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#pricing">Precios</a></li>
          <li><a class="nav-link scrollto" href="index.html#contratacion">Contrataciones</a></li>
          <li><a class="nav-link scrollto active" href="#">Comprobante</a></li>
          <li><a class="nav-link scrollto" href="adminLogin.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Comprobante</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Comprobante</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="recuperarComprobante">
      <!-- ======= SECCIÓN DE LECTURA DE REGISTROS ======= -->
      <div class="container seccionModificable show" id="lecturaRegistro">
        <div class="row">
          <form action="logica/recuperar.php" method="post">
            <fieldset>
              <legend>Búsqueda de comprobante: </legend>
              <div class="form-check form-check-inline radioDiv">
                <input class="form-check-input" type="radio" name="metodoBusqueda" id="busquedaCURP" value="curp" onclick="buscarPorCURP()"
                  checked>
                <label class="form-check-label" for="busquedaCURP">Búsqueda por CURP: </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metodoBusqueda" id="busquedaFecha"
                  value="folio" onclick="buscarPorFolio()">
                <label class="form-check-label" for="busquedaFecha">Búsqueda por Folio:</label>
              </div>
              <!--Buscar por CURP-->
              <div id="busquedaCURPDiv">
                <div class="form-floating mb-3 busquedaDiv" id="busquedaPorCurp">
                  <input type="text" class="form-control" id="curpABuscar" placeholder="Ingrese el CURP" name="curpABuscar">
                  <label for="curpABuscar">CURP registrado</label>
                </div>
                <!--Buscar por fecha-->
                <div class="form-floating mb-3 busquedaDiv" id="">
                  <input type="date" class="form-control" id="fechaABuscar" placeholder="Ingrese la fecha" name="fechaABuscar">
                  <label for="fechaABuscar">Fecha del evento registrada: </label>
                </div>
              </div>
              <!--Buscar por folio-->
              <div class="form-floating mb-3 busquedaDiv" id="busquedaPorFolio" style="display: none;">
                <input type="text" class="form-control" id="folioABuscar" placeholder="Ingrese su folio" name="folioABuscar">
                <label for="folioABuscar">Folio registrado: </label>
              </div>
            </fieldset>
            <div class="d-flex justify-content-center align-items-center enviarForm">
              <input type="submit" value="Recuperar Comprobante" class="botonEnvio">
            </div>
          </form>
          <!--AQUI SE DEBE DE MOSTRAR LA TABLA CON LOS REGISTROS OBTENIDOS DIRECTAMENTE DE LA BASE DE DATOS-->
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Dance Dynasty</h3>
      <p>Libera el poder de la fiesta.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Dance Dyansty</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Diseñado con <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/crudCode.js"></script>

</body>

</html>

<?php

  if(isset($_SESSION['estatus'])){
    if($_SESSION['estatus'] == true){
      $script = "<script> Swal.fire({
        icon: 'success',
        title: 'Comprobante recuperado',
        text: 'Se ha descargado su PDF',
        confirmButtonText: 'Aceptar'
      }); </script>" ;
      echo $script;
      session_destroy();
    }
    else{
      $script = " <script> Swal.fire({
        icon: 'error',
        title: 'ERROR',
        text: 'No se han encontrado datos asociados a su PDF',
        confirmButtonText: 'Aceptar'
      }); </script> ";
      echo $script;
      session_destroy();
    }
  }

?>