<?php 

    include('conexion.php');

    $Nombre = $_POST['Nombre'];
    $ApellidoP = $_POST['ApellidoPaterno'];
    $ApellidoM = $_POST['ApellidoMaterno'];
    $CURP = $_POST['CURP'];
    $Email = $_POST['emailUser'];
    $Tel = $_POST['Telefono'];
    $Calle = $_POST['Calle'];
    $CodigoP = $_POST['CP'];
    $NumeroE = $_POST['NumeroExt'];
    $NumeroI = $_POST['NumeroInt'];
    $Entidad = $_POST['Entidad'];
    $Municipio = $_POST['Municipio'];
    $Colonia = $_POST['Colonia'];
    $TipoSalon = $_POST['Salon'];
    $FechaE = $_POST['FechaEvento'];
    $Dia = $_POST['Dia'];
    $Hora = $_POST['Horario'];
    $NumPer = $_POST['NumPersonas'];
    $TipoE = $_POST['TipoEvento'];
    $OtroE = $_POST['otro'];
    $Menu = $_POST['Menu'];
    $Entrada = $_POST['Entradas'];
    $Fuerte = $_POST['platoFuerte'];
    $Postre = $_POST['postre'];

    
    /*$BtnV = $_POST['V'];

    if(isset($BtnV)){

        $HorarioV = $_POST['HorarioV'];
        $registroV = "INSERT INTO contratacion VALUES('$Dia','$HorarioV')";
        $resultRegistroV = mysqli_query($conexion, $registrov);

        if($resultadoRegistrov == 1){
            echo "<br>OK";
        }else{
            echo "<br>Algo salio mal";
        }

    }*/

    $registro = "INSERT INTO contratacion VALUES('$Nombre', '$ApellidoP', '$ApellidoM', '$CURP', '$Email', '$Tel', '$Calle', '$CodigoP', 
                                                '$NumeroE', '$NumeroI', '$Entidad', '$Municipio', '$Colonia', '$TipoSalon', '$FechaE', 
                                                '$Dia', '$Hora', '$NumPer', '$TipoE', '$OtroE', '$Menu', '$Entrada', '$Fuerte', '$Postre')";

    $ResultadoRegistro = mysqli_query($conexion, $registro); 

    if($ResultadoRegistro == 1){
        echo "<br>OK";
    }else{
        echo "<br>Algo salio mal";
    }

?>