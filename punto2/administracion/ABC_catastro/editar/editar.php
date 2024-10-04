<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$sql="select * from catastro where id=$id";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$id=$fila["id"];
$distrito = $fila['distrito'];
$zona = $fila['zona'];
$superficie = $fila['superficie'];
$xi = $fila['xi'];
$yi = $fila['yi'];
$xf = $fila['xf'];
$yf = $fila['yf'];

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
            <h1 class="text-center">Editar Catastro</h1>
            <form action="guardaeditar.php" method="GET">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="distrito" class="form-label">Distrito</label>
                    <input type="text" class="form-control" id="distrito" name="distrito" value="<?php echo $distrito; ?>">
                </div>
                <div class="mb-3">
                    <label for="zona" class="form-label">Zona</label>
                    <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $zona; ?>">
                </div>
                <div class="mb-3">
                    <label for="superficie" class="form-label">Superficie</label>
                    <input type="text" class="form-control" id="superficie" name="superficie" value="<?php echo $superficie; ?>">
                </div>
                <div class="mb-3">
                    <label for="xi" class="form-label">Xi</label>
                    <input type="text" class="form-control" id="xi" name="xi" value="<?php echo $xi; ?>">
                </div>
                <div class="mb-3">
                    <label for="yi" class="form-label">Yi</label>
                    <input type="text" class="form-control" id="yi" name="yi" value="<?php echo $yi; ?>">
                </div>
                <div class="mb-3">
                    <label for="xf" class="form-label">Xf</label>
                    <input type="text" class="form-control" id="xf" name="xf" value="<?php echo $xf; ?>">
                </div>
                <div class="mb-3">
                    <label for="yf" class="form-label">Yf</label>
                    <input type="text" class="form-control" id="yf" name="yf" value="<?php echo $yf; ?>">
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
