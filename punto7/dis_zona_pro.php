<?php
include "conexion.inc.php";
$distrito = $_GET['distrito'];
$zona = $_GET['zona'];
$sql = "SELECT * FROM CATASTRO xc, PERSONA xp where xc.ci = xp.ci and '$distrito' like xc.distrito and '$zona' like xc.zona";
$resultado = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar bg-dark">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="ABC_catastro" class="nav-link">Catastro</a>
            </li>
            <li class="nav-item">
                <a href="../ABC_persona/persona.php" class="nav-link">Propietarios</a>
            </li>
            <li class="nav-item">
                <a href="../when-case/persona_tipo_impuesto.php" class="nav-link">Listado por Impuesto</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">Combo-Dependencia</a>
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
        <?php echo "<h1>Catastro $distrito $zona</h1>" ?>
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
                <th scope="col">CI</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
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
                echo "<td scope='row'>$fila[ci]</td>";
                echo "<td scope='row'>$fila[apellido]</td>";
                echo "<td scope='row'>$fila[nombre]</td>";
                echo "<td scope='row'>";
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
