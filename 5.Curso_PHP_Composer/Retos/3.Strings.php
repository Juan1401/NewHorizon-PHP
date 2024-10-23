<?php

/**
 * Reto 2
 * Crea un programa en el que le pidas en 3 variables distintas: nombre, apellido y comida favorita. 
 * Como salida mostrarás el mensaje 
 * Hola,mi nombres es {nombre} {apellido} y mi comida favorita es {comida} en un solo string.
 */

$nombre = readline("Ingresa tu Nombre: ");
echo "\n";
$apellido = readline("Ingresa tu Apellido: ");
echo "\n";
$Comida = readline("Ingresa tu Comida Favorita: ");
echo "\n";

echo "Hola mi nombre es ".$nombre . " " . $apellido . "y mi comida favorita es ". $Comida ;

/**
 * Reto #3 Ajusta las iniciales 
 * Ahora, pedirás a tu usuario que ingrese su nombre, apellido y país de origen en minúsculas. Después mostrarás los datos de salida con mayúscula inicial al tratarse de nombres propios.
 */
