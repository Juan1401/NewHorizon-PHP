<?php 

//uTILIZACIÓN DE METODOD setcookie para cambiar el background del header.
    setcookie(
        name:"header_color",
        value:"#12373d"
);

$color = $_COOKIE["header_color"] ?? "#121f3d";

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

    <link rel="stylesheet" href="style.css">

    <title>Cookies</title>
  </head>
  <body>

  <!-- Obtiene el valor de color para cambiar el background de la pagina.  -->
    <header style="background: <?= $color ?>  "
    >
        
        <img src="logo.webp" alt="Platzi"> 
    </header>


  </body>
</html>
