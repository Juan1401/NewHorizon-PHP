<?php 

$courses = ['javascript','php'];
$wishes = ['php','laravel','javascript','vuejs'];
echo '<pre>';

//MIRAR LAS DIFERENCIAS
//Muestra que datos son diferentes entre los 2 arreglos.
var_dump( array_diff($wishes, $courses));
echo '<br>';


echo "<br>";
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];


var_dump(array_diff($arrayA, $arrayB));
echo "<br>";

//Evalua depende al orden que coloquemos
var_dump(array_diff($arrayB, $arrayA));
echo "<br>";


#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices
$arrayA1 = array("a" => "JavaScript", "b" => "PHP", "c" => "Golang", "d" => "Ruby");
$arrayB1 = array("a" => "JavaScript", "d" => "Haskell", "Assembler");
var_dump(array_diff_assoc($arrayA1, $arrayB1));
//output: ['PHP', 'Golang', 'Ruby']