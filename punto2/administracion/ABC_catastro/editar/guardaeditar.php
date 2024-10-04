<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$distrito = $_GET['distrito'];
$zona = $_GET['zona'];
$superficie = $_GET['superficie'];
$xi = $_GET['xi'];
$yi = $_GET['yi'];
$xf = $_GET['xf'];
$yf = $_GET['yf'];
$sql="update catastro set distrito='$distrito', zona='$zona', superficie='$superficie', xi='$xi', yi='$yi', xf='$xf', yf='$yf'  where id=$id";
mysqli_query($con, $sql);
header("Location: ../../index.php")
?>