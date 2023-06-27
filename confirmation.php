<?php
//Verificar el método con el que se han enviado
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellidoPaterno = $_POST['ApellidoPaterno'];
    $apellidoMaterno = $_POST['ApellidoMaterno'];
    $curp = $_POST['CURP'];
    $email = $_POST['emailUser'];
    $telefono = $_POST['Telefono'];
    $calle = $_POST['Calle'];
    $cp = $_POST['CP'];
    $numExt = $_POST['NumeroExt'];
    $numInt = $_POST['NumeroInt'];
    $entidad = $_POST['Entidad'];
    $municipio = $_POST['municipio'];
    $colonia = $_POST['colonia'];

    $salon = $_POST['Salon'];
    $fechaEvento = $_POST['FechaEvento'];
    $horario = $_POST['Horario'];
    $numP = $_POST['NumPersonas'];
    $tipoEv = $_POST['TipoEvento'];
    $otroEv = $_POST['otro'];
    $menu = $_POST['Menu'];
    $entradaMenu = $_POST['entradas'];
    $fuerteMenu = $_POST['platoFuerte'];
    $postreMenu = $_POST['postre'];

    $_SESSION['nombre'] = $_POST['Nombre'];
    $_SESSION['apellidoPaterno'] = $_POST['ApellidoPaterno'];
    $_SESSION['apellidoMaterno'] = $_POST['ApellidoMaterno'];
    $_SESSION['curp'] = $_POST['CURP'];
    $_SESSION['email'] = $_POST['emailUser'];
    $_SESSION['telefono'] = $_POST['Telefono'];
    $_SESSION['calle'] = $_POST['Calle'];
    $_SESSION['cp'] = $_POST['CP'];
    $_SESSION['numExt'] = $_POST['NumeroExt'];
    $_SESSION['numInt'] = $_POST['NumeroInt'];
    $_SESSION['entidad'] = $_POST['Entidad'];
    $_SESSION['municipio'] = $_POST['municipio'];
    $_SESSION['colonia'] = $_POST['colonia'];

    $_SESSION['salon'] = $_POST['Salon'];
    $_SESSION['fechaEvento'] = $_POST['FechaEvento'];
    $_SESSION['horario'] = $_POST['Horario'];
    $_SESSION['numP'] = $_POST['NumPersonas'];
    $_SESSION['tipoEv'] = $_POST['TipoEvento'];
    $_SESSION['otroEv'] = $_POST['otro'];
    $_SESSION['menu'] = $_POST['Menu'];
    $_SESSION['entradaMenu'] = $_POST['entradas'];
    $_SESSION['fuerteMenu'] = $_POST['platoFuerte'];
    $_SESSION['postreMenu'] = $_POST['postre'];
    
   
} 
elseif (isset($_SESSION['registro'])){
    $nombre = $_SESSION['nombre'];
    $apellidoPaterno = $_SESSION['apellidoPaterno'];
    $apellidoMaterno = $_SESSION['apellidoMaterno'];
    $curp = $_SESSION['curp'];
    $email = $_SESSION['email'];
    $telefono = $_SESSION['telefono'];
    $calle = $_SESSION['calle'];
    $cp = $_SESSION['cp'];
    $numExt = $_SESSION['numExt'];
    $numInt = $_SESSION['numInt'];
    $entidad = $_SESSION['entidad'];
    $municipio = $_SESSION['municipio'];
    $colonia = $_SESSION['colonia'];

    $salon = $_SESSION['salon'];
    $fechaEvento = $_SESSION['fechaEvento'];
    $horario = $_SESSION['horario'];
    $numP = $_SESSION['numP'];
    $tipoEv = $_SESSION['tipoEv'];
    $otroEv = $_SESSION['otroEv'];
    $menu = $_SESSION['menu'];
    $entradaMenu = $_SESSION['entradaMenu'];
    $fuerteMenu = $_SESSION['fuerteMenu'];
    $postreMenu = $_SESSION['postreMenu'];

    if(isset($_SESSION['datosIngresados'])){
        $datosIngresados = $_SESSION['datosIngresados'];
    }
}
elseif(isset($_SESSION['crudAdmin']) && $_SESSION['crudAdmin'] == true){
    header("Location: crud.php");
}
else {
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Página de confirmación</title>
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
    <link rel="stylesheet" href="assets/js/node_modules/sweetalert2/dist/sweetalert2.min.css">


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
                    <li><a class="nav-link scrollto" href="index.html">Volver al inicio</a></li>
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
                    <h2>Confirma tu contratación</h2>
                    <ol>
                        <li><a href="index.html">Inicio</a></li>
                        <li>Página de confirmación</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Resúmen de tu orden: </h2>
                    </div>
                    <form action="logica/registro.php" method="POST" autocomplete="off" class="row justify-content-center" id="formContratacion">
                        <div class="row datosContacto align-items-start datosContacto">
                            <div class="col-md-6">
                                <fieldset disabled>
                                    <legend>Datos de Contacto:</legend>
                                    <label for="Nombre">Nombre(s):</label>
                                    <input type="text" class="form-control" value="<?php echo $nombre ?>">
                                    <br>
                                    <label for="ApellidoPaterno">Apellido Paterno:</label>
                                    <input type="text" class="form-control" value="<?php echo $apellidoPaterno ?>">
                                    <br>
                                    <label for="ApellidoMaterno">Apellido Materno:</label>
                                    <input type="text" class="form-control" value="<?php echo $apellidoMaterno ?>">
                                    <br>
                                    <label for="CURP">CURP:</label>
                                    <input type="text" class="form-control" value="<?php echo $curp ?>">
                                    <br>
                                    <label for="emailUser">E-Mail:</label>
                                    <input type="email" class="form-control" value="<?php echo $email ?>">
                                    <br>
                                    <label for="Telefono">Teléfono:</label>
                                    <input type="tel" class="form-control" value="<?php echo $telefono ?>">
                                    <br>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset disabled="disabled">
                                    <legend>Dirección: </legend>
                                    <label for="Calle">Calle: </label>
                                    <input type="text" class="form-control" value="<?php echo $calle ?>">
                                    <br>
                                    <label for="CP">Código Postal: </label>
                                    <input type="text" class="form-control" value="<?php echo $cp ?>">
                                    <br>
                                    <label for="NumeroExt">Número Exterior: </label>
                                    <input type="text" class="form-control" value="<?php echo $numExt ?>">
                                    <br>
                                    <label for="NumeroInt">Número Interior: </label>
                                    <input type="text" class="form-control" value="<?php echo $numInt ?>">
                                    <br>
                                    <label for="Entidad">Entidad Federativa: </label>
                                    <select class="form-control form-select">
                                        <option value="Aguascalientes" <?php if ($entidad == 'Aguascalientes') echo 'selected'; ?>>Aguascalientes</option>
                                        <option value="Baja California" <?php if ($entidad == 'Baja California') echo 'selected'; ?>>Baja California</option>
                                        <option value="Baja California Sur" <?php if ($entidad == 'Baja California Sur') echo 'selected'; ?>>Baja California Sur</option>
                                        <option value="Campeche" <?php if ($entidad == 'Campeche') echo 'selected'; ?>>Campeche</option>
                                        <option value="Coahuila" <?php if ($entidad == 'Coahuila') echo 'selected'; ?>>Coahuila</option>
                                        <option value="Colima" <?php if ($entidad == 'Colima') echo 'selected'; ?>>Colima</option>
                                        <option value="Chiapas" <?php if ($entidad == 'Chiapas') echo 'selected'; ?>>Chiapas</option>
                                        <option value="Chihuahua" <?php if ($entidad == 'Chihuahua') echo 'selected'; ?>>Chihuahua</option>
                                        <option value="Durango" <?php if ($entidad == 'Durango') echo 'selected'; ?>>Durango</option>
                                        <option value="Distrito Federal" <?php if ($entidad == 'Distrito Federal') echo 'selected'; ?>>Distrito Federal</option>
                                        <option value="Guanajuato" <?php if ($entidad == 'Guanajuato') echo 'selected'; ?>>Guanajuato</option>
                                        <option value="Guerrero" <?php if ($entidad == 'Guerrero') echo 'selected'; ?>>Guerrero</option>
                                        <option value="Hidalgo" <?php if ($entidad == 'Hidalgo') echo 'selected'; ?>>Hidalgo</option>
                                        <option value="Jalisco" <?php if ($entidad == 'Jalisco') echo 'selected'; ?>>Jalisco</option>
                                        <option value="México" <?php if ($entidad == 'México') echo 'selected'; ?>>México</option>
                                        <option value="Michoacán" <?php if ($entidad == 'Michoacán') echo 'selected'; ?>>Michoacán</option>
                                        <option value="Morelos" <?php if ($entidad == 'Morelos') echo 'selected'; ?>>Morelos</option>
                                        <option value="Nayarit" <?php if ($entidad == 'Nayarit') echo 'selected'; ?>>Nayarit</option>
                                        <option value="Nuevo León" <?php if ($entidad == 'Nuevo León') echo 'selected'; ?>>Nuevo León</option>
                                        <option value="Oaxaca" <?php if ($entidad == 'Oaxaca') echo 'selected'; ?>>Oaxaca</option>
                                        <option value="Puebla" <?php if ($entidad == 'Puebla') echo 'selected'; ?>>Puebla</option>
                                        <option value="Querétaro" <?php if ($entidad == 'Querétaro') echo 'selected'; ?>>Querétaro</option>
                                        <option value="Quintana Roo" <?php if ($entidad == 'Quintana Roo') echo 'selected'; ?>>Quintana Roo</option>
                                        <option value="San Luis Potosí" <?php if ($entidad == 'San Luis Potosí') echo 'selected'; ?>>San Luis Potosí</option>
                                        <option value="Sinaloa" <?php if ($entidad == 'Sinaloa') echo 'selected'; ?>>Sinaloa</option>
                                        <option value="Sonora" <?php if ($entidad == 'Sonora') echo 'selected'; ?>>Sonora</option>
                                        <option value="Tabasco" <?php if ($entidad == 'Tabasco') echo 'selected'; ?>>Tabasco</option>
                                        <option value="Tamaulipas" <?php if ($entidad == 'Tamaulipas') echo 'selected'; ?>>Tamaulipas</option>
                                        <option value="Tlaxcala" <?php if ($entidad == 'Tlaxcala') echo 'selected'; ?>>Tlaxcala</option>
                                        <option value="Veracruz" <?php if ($entidad == 'Veracruz') echo 'selected'; ?>>Veracruz</option>
                                        <option value="Yucatán" <?php if ($entidad == 'Yucatán') echo 'selected'; ?>>Yucatán</option>
                                        <option value="Zacatecas" <?php if ($entidad == 'Zacatecas') echo 'selected'; ?>>Zacatecas</option>
                                    </select>

                                    <br>
                                    <label for="municipio">Municipio/Alcaldía: </label>
                                    <input type="text" class="form-control" value="<?php echo $municipio ?>">
                                    <br>
                                    <label for="colonia">Colonia: </label>
                                    <input type="text" class="form-control" value="<?php echo $colonia ?>">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row datosContratacion">
                            <div class="col-sm-12">
                                <fieldset class="DatoContratacion" disabled>
                                    <legend>Datos de Contratacion: </legend>
                                    <label for="Salon">Salón a elegir: </label>
                                    <select class="form-control form-select" id="salon">
                                        <option value="SalonA" <?php if ($salon == 'SalonA') echo 'selected'; ?>>Salón A</option>
                                        <option value="SalonB" <?php if ($salon == 'SalonB') echo 'selected'; ?>>Salón B</option>
                                        <option value="Jardin" <?php if ($salon == 'Jardin') echo 'selected'; ?>>Jardin de eventos</option>
                                    </select>
                                    <br>
                                    <label for="FechaEvento">Fecha del Evento: </label>
                                    <input type="date" class="form-control" value="<?php echo $fechaEvento ?>">
                                    <br>
                                    <label for="Horario">Horario: </label>
                                    <select class="form-control form-select" id="Horario">
                                        <!--
                            <option value="Viernes[12:00-17:00]">Viernes [12:00-17:00]</option>
                            <option value="Viernes[19:00-17:00]">Viernes [19:00-00:00]</option>
                            <option value="Sabado[12:00-17:00]">Sábado [14:00-19:00]</option>
                            <option value="Sabado[21:00-02:00]">Sábado [21:00-02:00]</option>
                            <option value="Domingo[09:00-14:00]">Domingo [09:00-14:00]</option> -->
                                    </select>
                                    <br>
                                    <label for="NumPersonas">No. Personas: </label>
                                    <input type="number" class="form-control" value="<?php echo $numP ?>">
                                    <br>
                                    <label for="TipoEvento">Tipo de evento: </label>
                                    <select class="form-control form-select">
                                        <option value="Bautizo" <?php if ($tipoEv == 'Bautizo') echo 'selected'; ?>>Bautizo</option>
                                        <option value="PrimeraComunion" <?php if ($tipoEv == 'PrimeraComunion') echo 'selected'; ?>>Primera Comunión</option>
                                        <option value="XVanios" <?php if ($tipoEv == 'XVAnios') echo 'selected'; ?>>XV años</option>
                                        <option value="Boda" <?php if ($tipoEv == 'Boda') echo 'selected'; ?>>Boda</option>
                                        <option value="Cumpleanios" <?php if ($tipoEv == 'Cumpleanios') echo 'selected'; ?>>Cumpleaños</option>
                                        <option value="Otro" <?php if ($tipoEv == 'Otro') echo 'selected'; ?>>Otro</option>
                                    </select>
                                    <?php
                                    if ($tipoEv == 'Otro') {
                                        echo ' <div>
                                            <br>
                                            <label for="otro">Otro (Especificar):</label>
                                            <input type="text" class="form-control" value = "' . $otroEv . '">
                                            </div>';
                                    }
                                    ?>
                                    <br>
                                    <label for="Menu">Menú: </label>
                                    <select class="form-control form-select" id="MenuAElegir">
                                        <option value="Economico" <?php if ($menu == 'Economico') echo 'selected'; ?>>Económico</option>
                                        <option value="Ejecutivo" <?php if ($menu == 'Ejecutivo') echo 'selected'; ?>>Ejecutivo</option>
                                        <option value="Personalizable" <?php if ($menu == 'Personalizable') echo 'selected'; ?>>Otro</option>
                                    </select>
                                    <script>
                                        mostrarCamposOtroMenu();
                                    </script>
                                    <div id="otroMenu">
                                        <br>
                                        <fieldset class="MenuPersonal" disa>
                                            <legend>Menú personalizado: </legend>
                                            <br>
                                            <label for="entradas">Entrada: </label>
                                            <select class="form-control form-select" id="entradaMenu">
                                                <option value="Bocadillos de mole" <?php if ($entradaMenu == 'Bocadillos de mole') echo 'selected'; ?>>Bocadillos de pollo con Mole</option>
                                                <option value="Bruschettas de champiñones" <?php if ($entradaMenu == 'Bruschettas de champiñones') echo 'selected'; ?>>Bruschettas de champiñones</option>
                                                <option value="Canelones de salchicha" <?php if ($entradaMenu == 'Canelones de salchicha') echo 'selected'; ?>>Canelones de salchicha y queso</option>
                                            </select>
                                            <br>
                                            <label for="platoFuerte">Plato Fuerte: </label>
                                            <select class="form-control form-select" id="fuerteMenu">
                                                <option value="Pechugas de pollo Cordon Bleu" <?php if ($fuerteMenu == 'Pechugas de pollo Cordon Bleu') echo 'selected'; ?>>Pechugas de pollo a la Cordon Bleu</option>
                                                <option value="Lomo de Cerdo en BBQ" <?php if ($fuerteMenu == 'Lomo de Cerdo en BBQ') echo 'selected'; ?>>Lomo de cerdo en salsa BBQ</option>
                                                <option value="Pozole o Menudo" <?php if ($fuerteMenu == 'Pozole o Menudo') echo 'selected'; ?>>Pozole o Menudo</option>
                                            </select>
                                            <br>
                                            <label for="postre">Postre: </label>
                                            <select name="postre" id="postreMenu" class="form-control form-select">
                                                <option value="Churros con chocolate" <?php if ($postreMenu == 'Churros con chocolate') echo 'selected'; ?>>Churros con chocolate</option>
                                                <option value="Pastel rayado de chocolate" <?php if ($postreMenu == 'Pastel rayado de chocolate') echo 'selected'; ?>>Pastel rayado de chocolate</option>
                                                <option value="Duraznos en rompope" <?php if ($postreMenu == 'Duraznos en rompope') echo 'selected'; ?>>Duraznos en rompope</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center enviarForm">
                            <input type="submit" value="Finalizar Contratacion" class="botonEnvio" id="finalizarButton" name="submit">
                            <button type="button" disabled="disabled" class="botonInhabil" id="botonPDF" onclick="hacerPDF();">Generar PDF y volver al inicio</button>
                        </div>
                    </form>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/registro.js"></script>
    <script src="assets/js/confirmacion.js"></script>
    <script src="assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>

</html>

<?php
if (isset($datosIngresados)) {
    // Procesar los datos y realizar el ingreso a la base de datos

    if($_SESSION['datosIngresados']){
        $scriptExito = "<script>
        Swal.fire({
            title: 'Éxito',
            text: 'Los datos se han guardado correctamente',
            icon: 'success'
        });

        cambiarBotones();
        </script>";
        
        echo $scriptExito;
    }
    else{
        $scriptFallo = "<script>
        Swal.fire({
            title: 'ERROR',
            text: 'Los datos no se pudieron almacenar," . mysqli_error($conn) . "intente de nuevo con otros datos',
            icon: 'error'
        });
        </script>";
       echo $scriptFallo;
    }

    // Limpiar la variable de sesión después de mostrar la alerta
    unset($_SESSION['datosIngresados']);
    
}
?>