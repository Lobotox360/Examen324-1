<?php 
include "conexion.inc.php";
$sql = "SELECT 
            CASE WHEN xc.id between 3000 and 3999 THEN CONCAT('ID Catastro: ', xc.id, '<br>', 'CI: ', xp.ci,'<br>', xp.apellido, ' ', xp.nombre) END  AS BAJO,
            CASE WHEN xc.id between 2000 and 2999 THEN CONCAT('ID Catastro: ', xc.id, '<br>', 'CI: ', xp.ci,'<br>', xp.apellido, ' ', xp.nombre) END  AS MEDIO,
            CASE WHEN xc.id between 1000 and 1999 THEN CONCAT('ID Catastro: ', xc.id, '<br>', 'CI: ', xp.ci,'<br>', xp.apellido, ' ', xp.nombre) END AS ALTO
        FROM persona xp
        JOIN catastro xc ON xp.ci = xc.ci
        GROUP BY xp.ci";
$resultado = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas por tipo de impuesto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar bg-dark">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="ABC_catastro/" class="nav-link">Catastro</a>
            </li>
            <li class="nav-item">
                <a href="ABC_persona/persona.php" class="nav-link">Propietarios</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">Listado por Impuesto when-case</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Usuario</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="../../login/login.php">Cerrar sesion</a></li>
            </ul>
        </div>
    </div>

    <!-- Main content -->
    <main>
        <h1>LISTADO DE PERSONAS SEGUN IMPUESTOS</h1>
        <table class="table table-striped">
            <thead>
            <tr>    
                <th scope="col">BAJO</th>
                <th scope="col">MEDIO</th>
                <th scope="col">ALTO</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                while($fila = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    if ($fila['BAJO'] != null)
                        echo "<td scope='row'>$fila[BAJO]</td>";
                    else
                        echo "<td scope='row'>Sin datos</td>";
                    if ($fila['MEDIO'] != null)
                        echo "<td scope='row'>$fila[MEDIO]</td>";
                    else
                        echo "<td scope='row'>Sin datos</td>";
                    if ($fila['ALTO'] != null)
                        echo "<td scope='row'>$fila[ALTO]</td>";
                    else
                        echo "<td scope='row'>Sin datos</td>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>