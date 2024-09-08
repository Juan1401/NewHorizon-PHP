<?php

    $palabras = ["sol","luna","cielo","perro" ]; //mi array de palabras
    $palabrasDesornadas = [];

$form = "<form action='analisis.php'>";
    for ($i=0; $i < count($palabras) ; $i++) { //itera número items que tiene mi arreglo 
       $form .= "La palabra ".str_shuffle($palabras[$i])." ".
        "<input type='text' name='palabra".$i."'>"."<br>"; //Función que sirve para desordenar un string de manera aleatoria.
    }

$titulo = "<h1>Orden de Palabras</h1>";
$button = "<button type='summit'>Enviar</button>";
$formCierre = "</form>";

// print_r($palabrasDesornadas);
 //mandar html desde el PHP 
echo $titulo;
echo $form.$button.$formCierre;


?>