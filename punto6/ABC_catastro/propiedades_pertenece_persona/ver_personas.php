<?php 
include "conexion.inc.php";
$id = $_GET["id"];
$sql="select * from catastro xc, persona xp where '$id' = xc.id and  xp.ci = xc.ci";
$resultado=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de propietarios La Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<main>
        <h1>PROPIETARIOS</h1>
        <table class="table table-striped">
            <thead>
            <tr>    
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Operaciones</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
            while($fila=mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                echo "<td scope='row'>$fila[ci]</td>";
                echo "<td scope='row'>$fila[nombre]</td>";
                echo "<td scope='row'>$fila[apellido]</td>";
                echo "<td scope='row'>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href='../../index.php'>volver</a >
    </main>
</body>
</html>