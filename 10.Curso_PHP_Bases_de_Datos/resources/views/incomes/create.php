<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Agrega un nuevo ingreso</title>
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <h1>Agrega un nuevo ingreso</h1>

    <form action="/incomes" method="post">

        <div class="mb-3">
        <label for="payment_method" class="form-label">Método de pago</label>
          <select class="form-select" aria-label="Método de pago" name="payment_method" >
            <option selected>Seleccione Método de Pago</option>
            <option value="1">Cuenta Bancaria</option>
            <option value="2">Tarjeta de Crédito</option>
          </select>
        </div>      

        <div class="mb-3">
        <label for="type" class="form-label">Tipo de ingreso</label>
          <select class="form-select" aria-label="Default select example" name="type" id="type">
            <option selected>Seleccione Método de Pago</option>
            <option value="1">Pago de Nómina</option>
            <option value="2">Reembolso</option>
          </select>
        </div>

      <div class="mb-3">
        <label for="date" class="form-label">Fecha</label>
        <input type="text" class="form-control" id="date" name="date">
      </div>

      <div class="mb-3">
        <label for="amount" class="form-label">Monto</label>
        <input type="text" class="form-control" id="amount" name="amount">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>

      <!-- Para saber a método nos estamos refiriendo -->
      <input type="hidden" name="method" values="post"> 

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>







  </body>
</html>
