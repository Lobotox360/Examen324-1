<?php
session_start();
$con = mysqli_connect("localhost", "u324", "123456", "bdfabian");
$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];
$sql = "SELECT COUNT(*) cantidad, rol 
        from persona
        where usuario = '$usuario'
        and contrasenia = '$contrasenia'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

if ($fila["cantidad"] != 0)
{
    $_SESSION["usuario"]=$usuario;
    $_SESSION["rol"]=$fila["rol"];
    if($fila["rol"] == 'A') header("Location: ../administracion/");
    else header("Location: propiedad\propiedad.php?usuario=$usuario");
}
else
    header("Location: index.php");
?>