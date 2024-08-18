<?php

// OPERADOR DE ASIGNACIÓN
$edad_de_jaimito = ($edad_de_pepito = 18) + 5;
echo("La edad de pepito es: " . $edad_de_pepito . "\n" );
echo("La edad de jaimito es: " . $edad_de_jaimito . "\n" );
echo ("\n");

// OPERADORES DE INCREMENTE
$contador = 1;
//$contador = $contador + 1; 
$contador ++;

echo($contador);
echo ("\n");

        // INCREMENTO A LA N
$contador = 1;
$contador += 30 ; //incrementa el número de veces que le coloqumos a la variable
echo($contador);
echo ("\n");

/*
Otros tipos de operadores a la N
+= incrementa el número de veces que le coloquemos a la variable
-= decrementa el número de veces que le coloquemos a la variable
*= multiplica el número de veces que le coloquemos a la variable
/= divide el número de veces que le coloquemos a la variable

*/

//OPERADOR DE CONCATENACIÓN
$nombre = "Carlos";
// $nombre = $nombre . " " . "Santana"; --concatenación de toda la vida
$nombre .= " " . "Santana";
echo ($nombre);
echo "\n";

//PRECEDENCIA DE OPERADORES
$contador = 1;
$resultado = $contador++;

echo $contador . "\n";
echo $resultado;  // no tiene logica que valga 1 pero esto es por la precedencia en PHP

echo "\n";


?>