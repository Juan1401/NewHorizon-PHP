<?php

function get_Pokemon(){
    $numero_aleatorio = rand(1, 5);  //función para numeros alteatorio en PHP (MINIMO,MAXIMO) numeros entre 1 y 5 
    switch($numero_aleatorio){
        case 1: 
        echo "Pikachu";
        break;

        case 2: 
        echo "Charmader";
        break;

        case 3:
        echo "Mewtho";
        break;

        default:
        echo "Lo siento no hay pokemon para ti";
    }
}

//Como usar o invocar una funcion.
    get_Pokemon();

    echo "\n";

//combinemos conceptos
/*
Llamar una función - 20 veces mediante un for.
*/

for ($i=0; $i < 20 ; $i++) { 
    get_Pokemon();
    echo "\n";
}

?>