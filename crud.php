<?php
session_start();

$_SESSION['crudAdmin'] = true;

$usuario = $_SESSION['username'];
if($usuario==null|| $usuario=''){
  
  header('Location: index.html');
  echo '<link href="assets/css/loginStyle.css" rel="stylesheet">
  <b class="error-acceso">Usted no tiene autorización<b>';
}

$conexion = mysqli_connect('localhost', 'root', '', 'pdancedinasty');
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina de administradores</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <link href="assets/css/crudStyle.css" rel="stylesheet">

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
          <li><a class="nav-link scrollto active" href="#" id="mostrarCrear">Crear registro</a></li>
          <li><a class="nav-link scrollto" href="#" id="mostrarLeer">Leer registro</a></li>
          <li><a class="nav-link scrollto" href="#" id="mostrarActualizar">Actualizar registro</a></li>
          <li><a class="nav-link scrollto " href="#" id="mostrarEliminar">Eliminar registro</a></li>
          <li><a class="nav-link scrollto" href="logica/salir.php">Cerrar Sesión</a></li>
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
          <h2>Pagina de modificación para administradores</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Sitio para administradores</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= CRUD DE ADMINISTRADORES ======= -->
    <section id="crud">
      <!-- ======= SECCIÓN DE CREACION DE REGISTROS ======= -->
      <div class="container" id="formulario">
            <form action="confirmation.php" method="POST" autocomplete="off" class="row justify-content-center" id="formContratacion">
            <div class="row datosContacto align-items-start">
                <div class="col-md-6">
                        <legend>Datos de Contacto:</legend>
                        <label for="Nombre">Nombre(s):</label>
                        <input type="text" name="Nombre" placeholder="Ingrese su(s) nombre(s)" class="form-control" id="NombreUser" required>
                        <br>
                        <label for="ApellidoPaterno">Apellido Paterno:</label>
                        <input type="text" name="ApellidoPaterno" placeholder="Ingrese su apellido paterno" class="form-control" id="ApellidoPaterno" required>
                        <br>
                        <label for="ApellidoMaterno">Apellido Materno:</label>
                        <input type="text" name="ApellidoMaterno" placeholder="Ingrese su apellido materno" class="form-control" id="ApellidoMaterno">
                        <br>
                        <label for="CURP">CURP:</label>
                        <input type="text" name="CURP" placeholder="Ingrese su CURP" class="form-control" id="CURP" oninput="validarMayusculas(this)" required>
                        <br>
                        <p>¿No conoces tu CURP? Consultala <a href="https://www.gob.mx/curp/">aquí</a></p>
                        <label for="emailUser">E-Mail:</label>
                        <input type="email" name="emailUser" placeholder="Ingrese su email" class="form-control" id="email" required>
                        <br>
                        <label for="Telefono">Teléfono:</label>
                        <input type="tel" name="Telefono" placeholder="Ingrese su telefono" class="form-control" id="numeroCel" required>
                        <br>
                </div>
                <div class="col-md-6">
                        <legend>Dirección: </legend>
                        <label for="Calle">Calle: </label>
                        <input type="text" name="Calle" placeholder="Ingrese su calle" class="form-control" id="calle" required>
                        <br>
                        <label for="CP">Código Postal: </label>
                        <input type="text" name="CP" placeholder="Ingrese su Código Postal" class="form-control" id="CP" required>
                        <br>
                        <label for="NumeroExt">Número Exterior: </label>
                        <input type="text" name="NumeroExt" placeholder="Ingrese su numero exterior" class="form-control" id="NumeroExt" required>
                        <br>
                        <label for="NumeroInt">Número Interior: </label>
                        <input type="text" name="NumeroInt" placeholder="Ingrese su numero interior" class="form-control" id="NumeroInt" required>
                        <br>
                        <label for="Entidad">Entidad Federativa: </label>
                        <select name="Entidad" class="form-control form-select" id="Entidad" required>
                            <option value="">--SELECCIONA UNA OPCION--</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Durango">Durango</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="México">México</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                        <br>
                        <label for="municipio">Municipio/Alcaldía: </label>
                        <input type="text" name="municipio" placeholder="Ingrese su municipio" class="form-control" id="municipio" required>
                        <br>
                        <label for="colonia">Colonia: </label>
                        <input type="text" name="colonia" placeholder="Ingrese su colonia" class="form-control" id="colonia" required>
                </div>
            </div>
            <div class="row datosContratacion">
                <div class="col-sm-12">
                    <fieldset class="DatoContratacion">
                        <legend>Datos de Contratacion: </legend>
                        <label for="Salon">Salón a elegir: </label>
                        <select name="Salon" class="form-control form-select" id="salon" required>
                            <option value="">--SELECCIONA UN VALOR--</option>
                            <option value="SalonA">Salón A</option>
                            <option value="SalonB">Salón B</option>
                            <option value="Jardin">Jardin de eventos</option>
                        </select>
                        <br>
                        <label for="FechaEvento">Fecha del Evento: </label>
                        <input type="date" name="FechaEvento" id="FechaEvento" class="form-control" required>
                        <br>
                        <label for="Horario">Horario: </label>
                        <select name="Horario" id="Horario" class="form-control form-select" required>
                            <option value="">--SELECCIONA UN VALOR--</option>
                            <!--
                            <option value="Viernes[12:00-17:00]">Viernes [12:00-17:00]</option>
                            <option value="Viernes[19:00-17:00]">Viernes [19:00-00:00]</option>
                            <option value="Sabado[12:00-17:00]">Sábado [14:00-19:00]</option>
                            <option value="Sabado[21:00-02:00]">Sábado [21:00-02:00]</option>
                            <option value="Domingo[09:00-14:00]">Domingo [09:00-14:00]</option> -->
                        </select>
                        <br>
                        <label for="NumPersonas">No. Personas: </label>
                        <input type="number" name="NumPersonas" id="numPersonas" placeholder="# Personas" class="form-control" required>
                        <br>
                        <label for="TipoEvento">Tipo de evento: </label>
                        <select name="TipoEvento" id="EventoAElegir" class="form-control form-select" onchange="mostrarCamposOtroEvento()" required>
                            <option value="">--SELECCIONA UN VALOR--</option>
                            <option value="Bautizo">Bautizo</option>
                            <option value="PrimeraComunion">Primera Comunión</option>
                            <option value="XVanios">XV años</option>
                            <option value="Boda">Boda</option>
                            <option value="Cumpleanios">Cumpleaños</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <div id="otroEvento" style="display: none;">
                            <br>
                            <label for="otro">Otro (Especificar):</label>
                            <input type="text" name="otro" id="otro" placeholder="Especifique su evento" class="form-control">
                        </div>
                        <br>
                        <label for="Menu">Menú: </label>
                        <select name="Menu" id="MenuAElegir" class="form-control form-select" onchange="mostrarCamposOtroMenu()" required>
                            <option value="">--SELECCIONA UN VALOR--</option>
                            <option value="Economico">Económico</option>
                            <option value="Ejecutivo">Ejecutivo</option>
                            <option value="Personalizable">Otro</option>
                        </select>
                        <div id="otroMenu" style="display: none;">
                            <br>
                            <fieldset class="MenuPersonal">
                                <legend>Personaliza tu menú</legend>
                                <br><br>
                                <label for="entradas">Entrada: </label>
                                <select name="entradas" id="entradaMenu" class="form-control form-select">
                                    <option value="">--SELECCIONA UNA OPCION--</option>
                                    <option value="Bocadillos de mole">Bocadillos de pollo con Mole</option>
                                    <option value="Bruschettas de champiñones">Bruschettas de champiñones</option>
                                    <option value="Canelones de salchicha">Canelones de salchicha y queso</option>
                                </select>
                                <br><br>
                                <label for="platoFuerte">Plato Fuerte: </label>
                                <select name="platoFuerte" id="fuerteMenu" class="form-control form-select">
                                    <option value="">--SELECCIONA UNA OPCION--</option>
                                    <option value="Pechugas de pollo Cordon Bleu">Pechugas de pollo a la Cordon Bleu</option>
                                    <option value="Lomo de Cerdo en BBQ">Lomo de cerdo en salsa BBQ</option>
                                    <option value="Pozole o Menudo">Pozole o Menudo</option>
                                </select>
                                <br><br>
                                <label for="postre">Postre: </label>
                                <select name="postre" id="postreMenu" class="form-control form-select">
                                    <option value="">--SELECCIONA UNA OPCION--</option>
                                    <option value="Churros con chocolate">Churros con chocolate</option>
                                    <option value="Pastel rayado de chocolate">Pastel rayado de chocolate</option>
                                    <option value="Duraznos en rompope">Duraznos en rompope</option>
                                </select>
                            </fieldset>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center enviarForm">
                <input type="submit" value="Realizar mi contratación" class="botonEnvio" id="submitButton">
                <input type="reset" value="Limpiar Formulario" class="botonEnvio">
            </div>
            </form>
            
        </div>

      <!-- ======= SECCIÓN DE LECTURA DE REGISTROS ======= -->
      <div class="container seccionModificable" id="lecturaRegistro" style="display: none;">
        <div class="row" id="recuperarComprobante">
          <form action="logica/leerRegistro.php" method="post">
            <fieldset>
              <legend>Búsqueda de registro: </legend>
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
              <input type="submit" value="Obtener registro" class="botonEnvio" id="botonDeBusqueda">
            </div>
          </form>
          <!--AQUI SE DEBE DE MOSTRAR LA TABLA CON LOS REGISTROS OBTENIDOS DIRECTAMENTE DE LA BASE DE DATOS-->
          <div class="row" id="tablaRegistros">
          </div>
        </div>
      </div>

      <!-- ======= SECCIÓN DE MODIFICACIÓN DE REGISTROS ======= -->
      <div class="container seccionModificable show" id="modificaRegistro" style="display: none;">
        <!--Codigo-->
      </div>

      <!-- ======= SECCIÓN DE ELIMINACION DE REGISTROS ======= -->
      <div class="container seccionModificable show" id="eliminaRegistro" style="display: none;">
        <div class="row">
          <form action="#">
            <fieldset>
              <legend>Eliminación de registro: </legend>
              <!-- CURP del evento a eliminar-->
              <div class="form-floating mb-3 busquedaDiv">
                <input type="text" class="form-control" id="curpEliminarEvento" placeholder="Ingrese el CURP">
                <label for="curpABuscar">CURP registrado del evento a eliminar</label>
              </div>
              <!--Buscar por fecha-->
              <div class="form-floating mb-3 busquedaDiv">
                <input type="date" class="form-control" id="fechaEliminarEvento" placeholder="Ingrese la fecha">
                <label for="fechaABuscar">Fecha registrada del evento a eliminar: </label>
              </div>
            </fieldset>
          </form>
          <!--AQUI SE DEBE DE MOSTRAR UN MENSAJE DE CONFIRMACION O ERROR DEPENDIENDO DE SI SE PUDO BORRAR EL DATO DE LA BD O NO
          PARA BUSCAR EL REGISTRO SUGIERO USAR EL CURP Y LA FECHA DEL EVENTO PARA NO ELIMINAR TODO ALV-->
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
        &copy; Copyright <strong><span>Dance Dynasty</span></strong>. Todos los derechos reservados
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/registro.js"></script>
  <script src="assets/js/crudCode.js"></script>

</body>

</html>