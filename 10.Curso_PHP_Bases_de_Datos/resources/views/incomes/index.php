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

    <title>Lista de Ingresos</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <h1>Lista de Ingresos</h1>

    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Payment Method</th>
          <th scope="col">Type</th>
          <th scope="col">Date</th>
          <th scope="col">Amount</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
      <?php  foreach($results as $results => $result) :  ?>
        <tr>
          <th scope="row"><?= $result["id"] ?> </th>
          <td><?= $result["payment_method"] ?> </td>
          <td><?= $result["type"] ?> </td>
          <td><?= $result["date"] ?> </td>
          <td><?= $result["amount"] ?> </td>
          <td><?= $result["description"] ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>


  </body>
</html>
