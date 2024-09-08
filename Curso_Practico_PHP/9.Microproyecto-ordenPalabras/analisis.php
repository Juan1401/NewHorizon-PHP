<?php
// print_r($_REQUEST);  //recibe datos de otro formulario.

$palabras = ["sol","luna","cielo","perro" ]; //mi array de palabras

for ($i=0; $i < count($palabras) ; $i++) { 
    if (($_REQUEST["palabra".$i])== $palabras[$i] ) {
        echo "<pre>";
        echo "Excelente la palabra era: ". $palabras[$i];
        echo "</pre>";
    }else{
        echo "<pre>";
        echo "No es correcto, la palabra era: ". $palabras[$i];
        echo "</pre>";
    }
}

?>