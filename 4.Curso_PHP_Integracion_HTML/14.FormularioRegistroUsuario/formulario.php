<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Sanitizando Datos Formulario</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <form action="server.php" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>
      <div class="mb-3">
        <label for="alias" class="form-label">Alias</label>
        <input type="text" class="form-control" name="alias" id="alias">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">No compartiremos tu correo con nadie mas.</div>
      </div>
      <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad">
      </div>
      <button type="submit" class="btn btn-primary">Mandar Formulario</button>
    </form>


 
  </body>
</html>
