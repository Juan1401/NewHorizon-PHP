<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// OPERADOR IGUAL ==
echo("OPERADOR IGUAL" . "\n"); 
$a == $b;

var_dump ($a == $b);  // son iguales
var_dump ($a == $b2);  // son iguales debido a que php no iguala por tipos
echo("\n");

// OPERADOR IDENTICO ===
echo("OPERADOR IDENTICO" . "\n");
//Aqui si se igual por tipos
var_dump ($a === $b);  // son iguales
var_dump ($a === $b2);  // son iguales por el tipo de operador
echo("\n");

// OPERADOR DIFERENTE !=   -Tampoco compara tipos.
echo("OPERADOR DIFERENTE" . "\n");
//Aqui si se igual por tipos
var_dump ($a != $b);  // son iguales
var_dump ($a != $b2);  // son iguales debido a que php no iguala por tipos
echo("\n");

// OPERADOR DIFERENTE IDENTICO !==   -Compara por tipos.
echo("OPERADOR DIFERENTE IDENTICO" . "\n");
//Aqui si se igual por tipos
var_dump ($a !== $b);  // son iguales
var_dump ($a !== $b2);  // son iguales por el tipo de operador
echo("\n");

// OPERADOR MENOR QUE < 
echo("OPERADOR MENOR QUE" . "\n");
var_dump ($a < $b);
var_dump ($c < $b);
var_dump ($c < $b);
var_dump ($d < $b);
echo("\n");

// OPERADOR MAYOR QUE < 
echo("OPERADOR MAYOR QUE" . "\n");
var_dump ($a > $b);
var_dump ($c > $b);
var_dump ($c > $b);
var_dump ($d > $b);
echo("\n");

// OPERADOR MAYOR O IGUAL QUE >=
echo("OPERADOR MAYOR O IGUAL QUE" . "\n");
var_dump ($a >= $b);
var_dump ($c >= $b);
var_dump ($c >= $b);
var_dump ($d >= $b);
echo("\n");

// OPERADOR MENOR O IGUAL QUE <=
echo("OPERADOR MAYOR O IGUAL QUE" . "\n");
var_dump ($a <= $b);
var_dump ($c <= $b);
var_dump ($c <= $b);
var_dump ($d <= $b);
echo("\n");

// OPERADOR NAVE ESPACIAL <=>
echo("OPERADOR NAVE ESPACIAL" . "\n");

//devuelve -1 si el valor de la izquierda es menor que el que esta a la izquieda
echo 1 <=> 2;
echo("\n");

//devuelve 0 si los operadoradores son iguales
echo 2 <=> 2;
echo("\n");

//devuelve 0 si los operadoradores son iguales
echo 2 <=> 1;
echo "\n";

// OPERADOR FUSION DE NULL ??
echo("OPERADOR FUSION DE NULL" . "\n");

$edad_de_pepito = "23";

// Sí la edad de juanito no esta definida entonces usa la edad de pepito
echo ($edad_juanito ?? $edad_de_pepito);
echo("\n");

?>