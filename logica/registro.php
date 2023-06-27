<?php
    session_start();

    //Conectar con la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'pdancedinasty');
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }


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

    // Ejecutar la consulta SQL para insertar los datos

    $sql = "INSERT INTO contratacion VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$curp', '$email',
    '$telefono', '$calle', '$cp', '$numExt', '$numInt', '$entidad', '$municipio', '$colonia', '$salon', '$fechaEvento', '$horario',
    '$numP', '$tipoEv', '$otroEv', '$menu', '$entradaMenu', '$fuerteMenu', '$postreMenu')";    

    if (mysqli_query($conexion, $sql)){
        $_SESSION['datosIngresados'] = true;
    }
    else{
        $_SESSION['datosIngresados'] = false;
    }

    $_SESSION['registro'] = true;
    
    header("location: ../confirmation.php");
?>
