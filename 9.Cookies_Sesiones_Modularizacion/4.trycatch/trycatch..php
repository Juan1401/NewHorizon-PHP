<?php

try{

    $resultado = 20/0;
    echo $resultado;

} catch(Error $e ){
    //utilizando el método getMessage para que muestre el error.
    echo "Excepcion encontrada: ". $e->getMessage(); echo "<br>";
    echo "!Upps algo salio mal!";
}

echo "<br>";
echo "Esto pasa si o sí";