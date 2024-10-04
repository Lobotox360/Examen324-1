<?php 
include "conexion.inc.php";
$ci=$_GET["ci"];
$sql="select * from persona where ci=$ci";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$ci=$fila["ci"];
$apellido = $fila['apellido'];
$nombre = $fila['nombre'];

//header("Location: index.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px; /* Espaciado superior */
        }
        .form-container {
            max-width: 600px; /* Ancho máximo del contenedor */
            margin: auto; /* Centramos el contenedor */
            padding: 20px; /* Espaciado interno */
            border: 1px solid #ccc; /* Bordes */
            border-radius: 5px; /* Esquinas redondeadas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <div class="form-container">
            <h1 class="text-center">Editar Propietario</h1>
            <form action="guardaeditar.php" method="GET">
                <div class="mb-3">
                    <label for="ci" class="form-label">CI: </label>
                    <input type="text" class="form-control" id="ci" name="ci" value="<?php echo $ci; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
                </div>
                <div class="text-center">
                    <input type="submit" name="Aceptar" value="Aceptar" class="btn btn-secondary"/>
                    <input type="submit" name="Cancelar" value="Cancelar" class="btn btn-danger"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
