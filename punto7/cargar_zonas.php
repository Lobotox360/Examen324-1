<?php
include "conexion.inc.php";

if (isset($_POST['distrito'])) {
    $distrito = mysqli_real_escape_string($con, $_POST['distrito']);
    $sql = "SELECT zona FROM CATASTRO WHERE distrito = '$distrito'";
    $resultado = mysqli_query($con, $sql);
    $zonas = array(); 
    while ($fila = mysqli_fetch_assoc($resultado)) 
        $zonas[] = array('zona' => $fila['zona']); 
    echo json_encode($zonas);
}
?>

