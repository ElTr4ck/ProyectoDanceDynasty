<?php

    $conexion = mysqli_connect('localhost:3307', 'root', '', 'pdancedinasty');

    
    if($conexion){
        echo 'Conexion exitosa a la Base de Datos';
    }else{
        echo 'Conexion erronea';
    }
    

?>