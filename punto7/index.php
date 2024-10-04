<?php 
include "conexion.inc.php";
$sql = "SELECT * FROM CATASTRO ORDER BY distrito";
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
                <a href="when-case/persona_tipo_impuesto.php" class="nav-link">Listado por Impuesto</a>
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
                <li><a class="dropdown-item" href="../../login/login.php">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Main content -->
    <main class="container mt-4">
        <h1>COMBO DISTRITO - ZONA</h1>
        <form id="formBusqueda" action="dis_zona_pro.php" method="GET" class="row g-3 align-items-center">
            <label for="distrito"><b>SELECCIONA UN DISTRITO</b></label>
            <select name="distrito" id="distrito" onchange="cargarZonas()">
                <option value="" disabled selected>Selecciona un distrito</option>
                <?php
                    while($fila = mysqli_fetch_array($resultado)) {
                        echo "<option value='$fila[distrito]'>$fila[distrito]</option>";
                    }
                ?>
            </select>

            <label for="zona" class="mt-3"><b>SELECCIONA UNA ZONA</b></label>
            <select name="zona" id="zona" disabled>
                <option value="" disabled selected>Selecciona una zona</option>
            </select>

            <a id="buscarBtn" class="btn btn-secondary mt-3" href="javascript:void(0);" onclick="redirigirBusqueda()" disabled>Buscar</a>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function cargarZonas() {
            var distrito = $('#distrito').val();
            
            if (distrito) { 
                $.ajax({
                    url: 'cargar_zonas.php', 
                    type: 'POST',
                    data: { distrito: distrito },
                    dataType: 'json',
                    success: function(response) {
                        var html = '<option value="" disabled selected>Selecciona una zona</option>';
                        if (response && response.length) {
                            $.each(response, function(index, value) {
                                html += '<option value="' + value.zona + '">' + value.zona + '</option>';
                            });
                            $("#zona").prop('disabled', false);
                        } else {
                            html += '<option value="" disabled>No se encontraron zonas</option>';
                            $("#zona").prop('disabled', true);
                        }
                        
                        $("#zona").html(html); 
                        habilitarBotonBuscar(); 
                    },
                    error: function() {
                        alert("Error al cargar las zonas.");
                    }
                });
            } else {
                $("#zona").html('<option value="" disabled selected>Selecciona una zona</option>');
                $("#zona").prop('disabled', true); // Deshabilitar el select de zonas
            }
        }

        function habilitarBotonBuscar() {
            var distrito = $('#distrito').val();
            var zona = $('#zona').val();
            
            if (distrito && zona) {
                $('#buscarBtn').prop('disabled', false); 
            } else {
                $('#buscarBtn').prop('disabled', true);
            }
        }

        $('#zona').change(habilitarBotonBuscar);

        function redirigirBusqueda() {
            var distrito = $('#distrito').val();
            var zona = $('#zona').val();
            
            if (distrito && zona) {
                window.location.href = "dis_zona_pro.php?distrito=" + encodeURIComponent(distrito) + "&zona=" + encodeURIComponent(zona);
            } else {
                alert("Por favor, selecciona un distrito y una zona.");
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
