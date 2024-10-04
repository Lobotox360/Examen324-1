<?php
    $ci = $_GET["ci"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Propietario</title>
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
        .text-center {
            text-align: center; /* Alineación centrada */
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <div class="form-container">
            <h1 class="text-center">Nuevo Propietario</h1>
            <form action="insertar.php" method="post">
                <div class="form-group">
                    <label for="ci"><b>CI:</b></label>
                    <input type="text" class="form-control" id="ci" name="ci" value="<?php echo $ci; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nombre"><b>Nombre:</b></label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido"><b>Apellido:</b></label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Insertar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
