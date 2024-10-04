<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INICIAR SESION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
  </head>
  <body class="bg-white d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="d-flex justify-content-center mb-3">
        <img src="..\varios\assets\login-icon.svg" alt="login-icon" style="height: 7rem"/>
      </div>
      <div class="text-center fs-1 fw-bold mb-3">Iniciar Sesion</div>
      <form action="valida.php" method="POST" class="login-form">
        <div class="form-group mb-3">
          <input type="text" name="usuario" class="form-control rounded-left" placeholder="Username" required />
        </div>
        <div class="form-group d-flex mb-3">
          <input type="password" name="contrasenia" class="form-control rounded-left" placeholder="Password" required />
        </div>
        <div class="form-group d-md-flex mb-3">
          <div class="w-50">
            <label class="checkbox-wrap checkbox-primary">
              Recuerdame
              <input type="checkbox" checked />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="w-50 text-md-right">
            <a href="#">Olvido el password</a>
          </div>
        </div>
        <!-- Centrar el botón -->
        <div class="form-group d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Vamos</button>
        </div>
      </form>
    </div>
  </body>
</html>
