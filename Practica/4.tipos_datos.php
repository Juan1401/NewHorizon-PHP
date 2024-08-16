<?php

$numerito = 23;

//me dice que es un integer
var_dump ($numerito);

echo "\n";

//me dice que es un string
$stringcito = "HOLI";

var_dump ($stringcito);

echo "\n";

//PHP ASI SEA STRING EL SUMA LAS 2 VARIABLES y en tiempo de ejecución modifica la variable
$numerito1 = "10";
$numerito2 = 10;

echo $numerito1 + $numerito2;

echo "\n";

//TIPOS FLOAT
$numerito3 = "10";

echo $numerito3 + 0.5;

echo "\n";


//SUMA DE NUMEROS DENTRO DE UN STRING?

$papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;

echo "\n";
//EFECTIVAMENTE SUMA EL NUMERO 10 CON 5 aunque generá una alerta.

?>