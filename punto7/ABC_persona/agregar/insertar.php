<?php 
include "conexion.inc.php";
$ci = $_POST['ci'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$sql = "INSERT INTO persona (ci, apellido, nombre, rol, usuario, contrasenia) VALUES ('$ci', '$apellido', '$nombre', 'U', 'NULL', 'NULL')";
mysqli_query($con, $sql);
header("Location: ../persona.php")
?>