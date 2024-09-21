<?php

require 'mail.php';

function validate( $name,$email,$subject, $message, $form ){

  return !empty($name) && !empty($email) && !empty($subject) && !empty($message);

}

$status = "";

if( isset($_POST["form"]) ){
    
    //TOMAR TODOS LOS DATOS DE NUESTRO ARREGLO Y LO PONE EN LA FUNCIÓN - ARRAY UNPACKING
    if(validate(...$_POST)){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";

        // Mandar el correo
        sendMail($subject,$body,$email,$name, true);

      $status = "success";
    }
    else{
      $status = "danger"; 
    }
}

?>

<!DOCTYPE html>
<html lang="es">
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

    <title>Formulario de Contacto</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    
    <form method="post" action="./" >
    <img class="mb-4" src="./images/hoja.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Contáctanos</h1>
    

    <?php if ($status == "danger") : ?>
      <div class="alert alert-danger" role="alert">
        <span>Hubó un problema al enviar el mensaje</span>
     </div>
    <?php endif ?>

    <?php if($status == "success"): ?>

    <div class="alert alert-success" role="alert">
         <span>Mensaje enviado con exitó</span>
    </div>

    <?php endif ?>
    
  
      <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="name" id="nombre">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label">Asunto:</label>
        <input type="text" class="form-control" name="subject" id="asunto">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Mensaje:</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
      </div>
      <button name="form" type="submit" class="btn btn-primary">Enviar</button>

    </form>
  
  </body>
</html>