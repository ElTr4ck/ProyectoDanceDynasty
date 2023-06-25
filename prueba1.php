<?php 
    session_start();
    $_SESSION["nombre"] = "Rodrigo";
    $_SESSION["numEmpleado"] = "2022085234";
    $nombre = $_SESSION["nombre"];
    $numEmp = $_SESSION["numEmpleado"];

    echo "<p style='color:green;'>Hola, tu nombre y tu numero de empleado son: " . $nombre . " " . $numEmp . "</p>";
    echo "<a href='prueba2.php'> Ir a la sesion 2 </a>";

?>