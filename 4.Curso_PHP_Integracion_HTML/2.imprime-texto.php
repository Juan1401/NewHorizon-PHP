<?php 

$nombre = "Mr Michi";

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
    <title>Imprime texto y etiquetas con PHP</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

    <!-- Primera forma de imprimir texto HTML desde PHP -->
    <?php echo "<b>Hola mamá, estoy aprendiendo a integrar PHP con HTML</b>" ; ?>

    <!-- Segunda forma mas corta de impriir texto HTML desde PHP -->
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP </i>" ; ?>

    <!-- Esto nos sirve para llamar varaibles PHP desde el HTML. -->
    <h1>!Hola mi nombre es: <?= $nombre ?> </h1>
    

  </body>
</html>
