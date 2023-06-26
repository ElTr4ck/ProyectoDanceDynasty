<?php
require 'logica/conexion.php';
session_start();

$usuario = $_POST['userAdmin'];
$clave = $_POST['passAdmin'];

$q = "SELECT COUNT(*) as contar from Administrador where Nombre = '$usuario' and Contraseña='$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
$_SESSION['username']= $usuario;
header("location: crud.php");

}else{

include ("adminLogin.php");
echo '<link href="assets/css/loginStyle.css" rel="stylesheet">
<b class="errorm">DATOS INCORRECTOS</b>';}
?>
