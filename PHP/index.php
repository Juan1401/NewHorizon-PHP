<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud con PHP</title>
  </head>
  <body>
  <h1 class = "text-center">Facturación</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container-fluid row">
    </br>
    <form class="col-3" method="POST">
    <h3 class = "text-align-left text-secondary">Registro de Facturas</h3>
    <?php
        include 'modelo/conexion.php';
        include 'controlador/registro_facturas.php';
    ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Empresa Id</label>
            <input type="text" class="form-control" name="empresa_id" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prefijo</label>
            <input type="text" class="form-control" name="prefijo" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Número Factura</label>
            <input type="number" class="form-control" name="factura_fiscal" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha Factura</label>
            <input type="date" class="form-control" name="fecha_factura" >
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok"> Registrar</button>
    </form>
    <div class = "col-8 p-4">
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Empresa Id</th>
                <th scope="col">Prefijo</th>
                <th scope="col">Numero Factura</th>
                <th scope="col">Fecha Factura</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from fac_facturas_juan");

                while($datos = $sql->fetch_object()) { ?> <!-- obtiene una fila de resultados como un objeto. -->
                    <tr>
                        <th scope="row"><?= $datos->empresa_id ?></th>
                        <td><?= $datos->prefijo ?></td>
                        <td><?= $datos->factura_fiscal ?></td>
                        <td><?= $datos->fecha_registro ?></td>
                        <td>
                            <a href="">Editar</a>
                            <a href="">Eliminar</a>
                        </td>
                    </tr>
                <?php }
            ?>
            
            </tbody>
            </table>
    </div>
    </div>
  </body>
</html>