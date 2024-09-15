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

    <title>Envio de Archivos</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">


  <form action="./server.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Imagen:</label>
      <input type="file" class="form-control" name="image">
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-outline-primary" >Mandar Formulario</button>
    </div>
</form>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
