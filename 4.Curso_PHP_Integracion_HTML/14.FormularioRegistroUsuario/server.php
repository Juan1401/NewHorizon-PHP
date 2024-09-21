<?php

// echo"<pre>";
// var_dump($_POST);
// echo"</pre>";

$nombre = $_POST["nombre"];
$alias = $_POST["alias"];
$email = $_POST["email"];
$edad = $_POST["edad"];

//Sirve para eliminar posibles inyecciones de etiquetas html por medio de un input.
$htmlentities = htmlentities($nombre);

//cambio cacteres por slashes para evitar ingresar un dato que produzca un daño en la base de datos.
$addslashes = addslashes($alias);

//EXPRESIONES REGULARES.
/*
Se implementa la función preg_replace para quitar los números de un campo que yo eliga
y los reemplzace por lo que yo desee, en este caso se reemplaza por nada.
*/
$onlywords = preg_replace("/\d/", "", $alias);

//Aqui se realiza de forma inversa. utilizando la expresión regular "/\D/" se quitan las letras y se reemplazan por
//por el campo que se desee.
$onlynumbers = preg_replace("/\D/", "", $alias);

//FIN EXPRESIONES REGULARES.

//Se implementa la función filter_var en conjunto con la variable FILTER_SANITIZE_EMAIL
//La cual tiene una función prefenida para colocar un correo en un formato correcto.
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

//Se implementa la función filter_var en conjunto con la variable FILTER_SANITIZE_NUMBER_INT
//La cual tiene una función prefenida para colocar un número a ENTERO.
$sanitize_int = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

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

    <title>Formulario Sanitizado</title>
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>


    <?php
        if(!empty($nombre) && !empty($alias) && !empty($email) && !empty($edad) ): ?>
                <h2> ¡Hola! <?=  $nombre ?> Bienvenido a tu aplicación 😎✅</h2>
            <?php  else :  ?>
                <h2> El formulario no se envio correctamente, vuelve a intentarlo 🤷‍♂️ </h2>
           <?php endif ?>
    
    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin numeros:</p>
    <?= $onlywords ?>

    <p>Username sin letras:</p>
    <?= $onlynumbers ?>

    <p>Email:</p>
    <?= $email ?>

    <p>Edad:</p>
    <?= $sanitize_int ?>

  </body>
</html>



