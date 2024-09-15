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
    <title>Formulario con GET</title>
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

<form action="./server.php" method="get">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-3">
      <label for="edad" class="form-label">Edad</label>
      <input type="number" class="form-control" name="edad">
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-outline-primary" >Mandar Formulario</button>
    </div>




</form>



</body>
</html>
