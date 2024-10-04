<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Catastro</title>
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
            <h1 class="text-center">Nuevo Catastro</h1>
            <form action="insertar.php" method="post">
                <div class="form-group">
                    <label for="id"><b>ID:</b></label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>

                <div class="form-group">
                    <label for="distrito"><b>Distrito:</b></label>
                    <input type="text" class="form-control" name="distrito" required>
                </div>
                <div class="form-group">
                    <label for="zona"><b>Zona:</b></label>
                    <input type="text" class="form-control" name="zona" required>
                </div>
                <div class="form-group">
                    <label for="superficie"><b>Superficie:</b></label>
                    <input type="text" class="form-control" name="superficie" required>
                </div>
                <div class="form-group">
                    <label for="xi"><b>Xi:</b></label>
                    <input type="text" class="form-control" name="xi" required>
                </div>
                <div class="form-group">
                    <label for="yi"><b>Yi:</b></label>
                    <input type="text" class="form-control" name="yi" required>
                </div>
                <div class="form-group">
                    <label for="xf"><b>Xf:</b></label>
                    <input type="text" class="form-control" name="xf" required>
                </div>
                <div class="form-group">
                    <label for="yf"><b>Yf:</b></label>
                    <input type="text" class="form-control" name="yf" required>
                </div>

                <div class="form-group">
                    <label for="ci"><b>CI Propietario:</b></label>
                    <input type="text" class="form-control" name="ci" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Insertar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
