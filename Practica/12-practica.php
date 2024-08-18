<?php

//RETO 1
/*
Vamos a crear un programa en PHP que nos convierta 
una cantidad de tiempo en segundos ingresada 
por un usuario a horas, minutos y segundos.
*/

$segundos = readline("Ingresa el tiempo en segundos: ");
echo ("Usted ingreso: ".$segundos . " segundo/s");  //3723  1 hora, 2 minutos y 3 segundos
echo "\n";

$horas = $segundos / 3600;  //se convierte de segundos a horas
$minutos = (($segundos % 3600) / 60 ); // se saca el restante de horas y se convierte en minutos
$segundos = (($segundos % 3600) % 60 ); // se saca el restante de minutos y se convierte en segundos

echo($segundos . " Segundos equivalen a: " . (int) $horas . " hora/s " . (int) $minutos . " minuto/s con " . $segundos . " segundo/s");
echo "\n";



?>