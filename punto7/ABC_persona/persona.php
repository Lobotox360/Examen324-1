<?php 
include "conexion.inc.php";
$sql="select * from persona where rol like 'U'";
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
    <!-- Sidebar -->
    <div class="sidebar bg-dark">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="../ABC_catastro" class="nav-link">Catastro</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">Propietarios</a>
            </li>
            <li class="nav-item">
                <a href="../when-case/persona_tipo_impuesto.php" class="nav-link">Listado por Impuesto</a>
            </li>
            <li class="nav-item">
                <a href="../" class="nav-link">Combo-Dependencia</a>
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
        <h1>ADMINISTRACIÓN DE PROPIETARIOS LA PAZ</h1>
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
                echo "<a class='btn btn-secondary' href='editar/editar.php?ci=$fila[ci]'>Editar</a>";
                echo "<a class='btn btn-danger' href='eliminar/eliminar.php?ci=$fila[ci]'>Eliminar</a>";
                echo "<a class='btn btn-primary' href='propiedades_propietario/ver_prop.php?ci=$fila[ci]'>Ver Propiedades</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href='agregar/nuevo.php'>Nuevo</a >
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
