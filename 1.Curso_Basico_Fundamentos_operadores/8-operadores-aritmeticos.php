<?php

//SUMA
// echo (5 + 5);
// echo ("\n");

//RESTA

// $resultado;
// $resultado = (5 - 5);
// echo ($resultado);

// echo ("\n");

//MULTIPLICACION

// echo (5 * 6) . " " . (80 / 4); // lo puntos son concatenación
// echo ("\n");

//DIVISIÓN Y MODULO - Diferencia

// echo (5 / 2 . "\n");
// echo (5 % 2 );
// echo ("\n");


//Ejemplo practico 

$segundos = '7201'; 

//convertir segundos a minutos y horas

$minutos = $segundos / 60;
$horas = $minutos / 60;

echo ($segundos . " segundos son iguales a: " . $minutos . " minutos o tambien " . $horas . " horas" );
echo ("\n");

//Ejemplo practico 2 - Modulo
//Cuantos segundos nos sobran al parsarlos horas



echo "7200 segundos convertirdos a horas son " . ($segundos / 3600 ) . "\n";
echo "Sobran " . ($segundos % 3600) . " segundos.";
echo ("\n")



?>