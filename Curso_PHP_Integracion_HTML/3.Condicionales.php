<?php 

$se_hablo_de_bruno = false;

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

    <title>Hello, world!</title>
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

     
    <!-- ESTO NO SE DEBE HACER -->
    <h2>ESTO NO SE DEBE DE HACER</h2>
    <?php
    if($se_hablo_de_bruno){
        echo "<b>Hablaron de Bruno 😈</b>";
    }
    else 
    {
        echo "<b>No hablaron de bruno 😍</b>";
    }
    ?>

    <!-- ESTO ES ACEPTABLE -->
    <h2>Esta forma es ACEPTABLE</h2>
    <?php if($se_hablo_de_bruno) { ?> 
        
        <b>Si, hablaron de bruno! 🤐</b>

    <?php } else { ?> 
        
        <b>No, no se habló de bruno 🤷‍♂️🤷‍♂️🤷‍♂️</b>

    <?php } ?>

    <!-- ESTO SI DEBERIA HACERLO -->
     <h2>Esto si deberías hacerlos</h2>
    
    <?php if($se_hablo_de_bruno):  ?>
        <b>Si, hablaron de bruno! 😍</b>
    <?php else: ?>
        <b>No, no se habló de bruno 😎😎</b>
    <?php endif; ?>


  </body>
</html>