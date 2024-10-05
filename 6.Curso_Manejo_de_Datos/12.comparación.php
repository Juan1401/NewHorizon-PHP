<?php 

$courses = ['javascript','php'];
$wishes = ['php','laravel','javascript','vuejs'];


//MIRAR LAS DIFERENCIAS
//Muestra que datos son diferentes entre los 2 arreglos.
var_dump( array_diff($wishes, $courses));
echo '<br>';


echo "<br>";
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
//Evalua depende al orden que coloquemos
var_dump(array_diff($arrayB, $arrayA));

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices