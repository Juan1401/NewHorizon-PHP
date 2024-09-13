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

    <title>Hello, world!</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>


    <h1>Tabla del 9</h1>

    <ul></ul>

    <ul>
        <?php  for ($i=0; $i < 9 ; $i++) { 

            echo "<li>". "9 x 1 = " .( 9 *($i + 1) ). "</li>";

        }  
        ?>
    </ul>


  </body>
</html>
