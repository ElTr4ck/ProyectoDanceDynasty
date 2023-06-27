<?php
    session_start();

    //Conectar con la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'pdancedinasty');
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    if($_POST['metodoBusqueda'] == 'folio'){
        $folio = $_POST['folioABuscar'];
        $sql = "SELECT * FROM comprobante WHERE folio = '$folio'";
        $resultado = mysqli_query($conexion, $sql);

        //DE ser encontrado, entonces hay registro

        if(mysqli_num_rows($resultado) > 0){

            $nombreArchivo = $folio . '.pdf';
            $rutaArchivo = '../assets/pdfs/' . $nombreArchivo;
            if(file_exists($rutaArchivo)){
                // Establecer las cabeceras para la descarga
                header("Content-Type: application/octet-stream");
                header("Content-Disposition: attachment; filename=" . $nombreArchivo);
                header("Content-Length: " . filesize($rutaArchivo));
                readfile($rutaArchivo);
                $_SESSION['estatus'] = true;
            }
            else{
                $_SESSION['estatus'] = false;
            }
        }
        else{
            $_SESSION['estatus'] = false;
        }
    }
    else{
        $curp = $_POST['curpABuscar'];
        $fecha = $_POST['fechaABuscar'];
        $sql = "SELECT * FROM comprobante WHERE Curp = '$curp' AND FechaEvento = '$fecha'";
        $resultado = mysqli_query($conexion, $sql);

        //DE ser encontrado, entonces hay registro

        if(mysqli_num_rows($resultado) > 0){
            $registro = mysqli_fetch_assoc($resultado);
            $folio = $registro['folio'];
            $nombreArchivo = $folio . '.pdf';
            $rutaArchivo = '../assets/pdfs/' . $nombreArchivo;
            if(file_exists($rutaArchivo)){
                // Establecer las cabeceras para la descarga
                header("Content-Type: application/octet-stream");
                header("Content-Disposition: attachment; filename=" . $nombreArchivo);
                header("Content-Length: " . filesize($rutaArchivo));
                readfile($rutaArchivo);
                $_SESSION['estatus'] = true;
            }
            else{
                $_SESSION['estatus'] = false;
            }
        }
        else{
            $_SESSION['estatus'] = false;
        }
    }

    header("location: ../comprobante.php");
    
?>