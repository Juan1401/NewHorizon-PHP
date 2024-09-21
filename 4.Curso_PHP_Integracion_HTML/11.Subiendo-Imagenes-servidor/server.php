<?php

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

//Traer el nombre del archivo 
$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta_a_subir = "images/$basename";

$tipo_archivo = explode(".",$basename );
// print_r($tipo_archivo);
 
?>

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

    <title>Imagen Cargada</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script> 
       
    <?php 
    if ($tipo_archivo[1] == "jpg"): ?>
        <?php move_uploaded_file($image, $ruta_a_subir);?>
        <h1>La imagen ha sido cargada sastisfactoriamente ✅<h1>
        <h2>Imagen cargada en la ruta <?= $ruta_a_subir ?> con el nombre de: <?= $basename  ?><h2>
      <?php  else: ?>
        <h2>Error la imagen no esta en formato 😓 .jpg<h2>
          <?php endif ?>
  </body>
</html>