<?php

//Saber el número favorito de una michi
// MICHI 1 : 9
// MICHI 2 : 4
// MICHI 3 : 3
// MICHI 4 : 9
// MICHI 5 : 1

$michi = readline("Tenemos 5 michis, de que michi quieres sabe su numero favorio? : ");

switch( $michi){
    case 1:
        echo "Su numero favorito es el 9";
        break;
    case 2:
        echo "Su numero favorito es el 1";
        break;
    case 3:
        echo "Su numero favorito es el 3";
        break;
    case 4:
        echo "Su numero favorito es el 9";
        break;
    case 5:
        echo "Su numero favorito es el 1";
        break;
default : 
        echo "Ese michi no existe :(";
}

echo ("\n");

//recordar el break siempre al final de cada caso
//Esto porque si no el compilador se saltara al siguiente caso.

?>