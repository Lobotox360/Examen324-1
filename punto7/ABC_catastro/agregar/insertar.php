<?php 
include "conexion.inc.php";
$id = $_POST['id'];
$distrito = $_POST['distrito'];
$zona = $_POST['zona'];
$superficie = $_POST['superficie'];
$xi = $_POST['xi'];
$yi = $_POST['yi'];
$xf = $_POST['xf'];
$yf = $_POST['yf'];
$ci = $_POST['ci'];
$sql = "INSERT INTO catastro (id, distrito, zona, superficie, xi, yi, xf, yf, ci) VALUES ('$id', '$distrito', '$zona', '$superficie', '$xi', '$yi', '$xf', '$yf', '$ci')";
mysqli_query($con, $sql);
header("Location: ../persona_tiene_propiedades/nuevo.php?ci=$ci")
?>