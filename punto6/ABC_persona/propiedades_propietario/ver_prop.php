<?php 
include "conexion.inc.php";
$ci = $_GET["ci"];
$sql="select * from catastro  where '$ci' = ci ";
$resultado=mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROPIEDADES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <h1>PROPIEDADES</h1>
        <table class="table table-striped">
            <thead>
            <tr>    
                <th scope="col">ID</th>
                <th scope="col">DISTRITO</th>
                <th scope="col">ZONA</th>
                <th scope="col">SUPERFICIE</th>
                <th scope="col">Xi</th>
                <th scope="col">Yi</th>
                <th scope="col">Xf</th>
                <th scope="col">Yf</th>

            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
            while($fila=mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                echo "<td scope='row'>$fila[id]</td>";
                echo "<td scope='row'>$fila[distrito]</td>";
                echo "<td scope='row'>$fila[zona]</td>";
                echo "<td scope='row'>$fila[superficie]</td>";
                echo "<td scope='row'>$fila[xi]</td>";
                echo "<td scope='row'>$fila[yi]</td>";
                echo "<td scope='row'>$fila[xf]</td>";
                echo "<td scope='row'>$fila[yf]</td>";
                echo "<td scope='row'>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href='../persona.php'>Volver</a >
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>