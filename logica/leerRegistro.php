<?php
    session_start();

    //Conectar con la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'pdancedinasty');
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    // Array para almacenar los resultados
    $datos = array();

    if($_POST['metodoBusqueda'] == 'folio'){
        $folio = $_POST['folioABuscar'];
        $sql = "SELECT * FROM comprobante WHERE folio = '$folio'";

        $resultado = mysqli_query($conexion, $sql);

        //DE ser encontrado, entonces hay registro

        if(mysqli_num_rows($resultado) > 0){
            $registro = mysqli_fetch_assoc($resultado);
            $curp = $registro['Curp'];
            $fecha = $registro['FechaEvento'];
            $sql2 = "SELECT * FROM contratacion WHERE Curp = '$curp' AND FechaE = '$fecha'";
            $resultado2 = mysqli_query($conexion, $sql2);

            while ($fila = mysqli_fetch_assoc($resultado2)) {
                $datos[] = $fila;
            }
        }
    }
    else{
        $curp = $_POST['curpABuscar'];
        $fecha = $_POST['fechaABuscar'];
        $sql = "SELECT * FROM contratacion WHERE Curp = '$curp' AND FechaE = '$fecha'";
        $resultado = mysqli_query($conexion, $sql);

        //DE ser encontrado, entonces hay registro

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $datos[] = $fila;
        }
    }

    // Devolver los resultados como JSON
    echo json_encode($datos);

    // Cerrar la conexión
    mysqli_close($conexion);
    
?>