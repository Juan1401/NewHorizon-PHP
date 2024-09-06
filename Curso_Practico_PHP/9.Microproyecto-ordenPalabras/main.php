<?php

    $palabras = ["sol","luna","cielo" ]; //mi array de palabras
    $palabrasDesornadas = [];


    for ($i=0; $i < 3 ; $i++) { //itera número items que tiene mi arreglo 
        $palabrasDesornadas[$i] = str_shuffle($palabras[$i]); //Función que sirve para desordenar un string de manera aleatoria.
    }
   
print_r($palabrasDesornadas);
 //mandar html desde el PHP 
    echo "
    <h1>Orden de Palabras</h1>
<form action='analisis.php'>
    <input type='text' name='palabra0'>
    <input type='text' name='palabra1'>
    <input type='text' name='palabra2'>
    <button type='summit'>Enviar</button>
</form>
";

?>