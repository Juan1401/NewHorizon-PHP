<?php

$valorA = true;
$valorB = false;

//Y (AND - &&)
// $resultado = $valorA AND $valorB;
$resultado = $valorA && $valorB;

//Ó (OR - ||)
// $resultado = $valorA OR $valorB;
$resultado2 = $valorA OR $valorB;

//xor SI AMBOS SON TRUE no nos va a funcionar.
$resultado3 = $valorA xor $valorB;

var_dump ($resultado);echo"\n";
var_dump ($resultado2);echo"\n";
var_dump ($resultado3);echo"\n";



?>