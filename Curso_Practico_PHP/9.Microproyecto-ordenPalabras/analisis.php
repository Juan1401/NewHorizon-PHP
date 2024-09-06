<?php
print_r($_REQUEST);  //recibe datos de otro formulario.

$palabras = ["sol","luna","cielo" ]; //lo vuelvo a poner

if (($_REQUEST['palabra0'])== $palabras[0] ) {
    echo "<pre>";
    echo "Excelente la palabra era: ". $palabras[0];
    echo "</pre>";
} else{
    echo "<pre>";
    echo "No es correcto, la palabra era: ". $palabras[0];
    echo "</pre>";
}
if (($_REQUEST['palabra1'])== $palabras[1] ) {
    echo "<pre>";
    echo "Excelente la palabra era: ". $palabras[1];
    echo "</pre>";
} else{
    echo "<pre>";
    echo "No es correcto, la palabra era: ". $palabras[1];
    echo "</pre>";
}
if (($_REQUEST['palabra2'])== $palabras[2] ) {
    echo "<pre>";
    echo "Excelente la palabra era: ". $palabras[2];
    echo "</pre>";
} else{
    echo "<pre>";
    echo "No es correcto, la palabra era: ". $palabras[2];
    echo "<pre>";
}



?>