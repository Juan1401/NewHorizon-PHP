<?php

require("Logic/CreateMichis.php");

?>

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

    <title>Michis</title>
  </head>
  <body>

  <h3>Michis Disponibles<h3>
 <ul class="list-group list-group-flush">
   <li class="list-group-item"><?= $mrMichi->getName(); ?></li>
   <li class="list-group-item"><?= $michisancio->getName(); ?></li>
   <li class="list-group-item"><?= $michales->getName(); ?></li>
 </ul>

<br>

 <h3>Michis Adoptados<h3>
 <ul class="list-group list-group-flush">
   <li class="list-group-item"><?= $mrMichi_adopted->getAdopted_by(); ?> fue adoptado por:  </li>
   <li class="list-group-item"><?= $michisancio_adopted->getAdopted_by(); ?> fue adoptado por: </li>
   <li class="list-group-item"><?= $michales_adopted->getAdopted_by(); ?> fue adoptado por: </li>
 </ul>

  </body>
</html>

