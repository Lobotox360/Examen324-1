<?php 
include "conexion.inc.php";
$ci=$_GET["ci"];
$apellido = $_GET['apellido'];
$nombre = $_GET['nombre'];

$sql="update persona set apellido='$apellido', nombre='$nombre' where ci=$ci";
mysqli_query($con, $sql);
header("Location: ../persona.php")
?>