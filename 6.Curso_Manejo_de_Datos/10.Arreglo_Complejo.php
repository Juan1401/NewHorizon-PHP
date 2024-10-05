<?php

//Array con Key o clave definida -- ARRAY COMPLEJO.

$courses = [
	'frontend' =>'javascript', 
	'framework' => 'laravel', 
	'backend' => 'php'
];

echo '<pre>';
var_dump($courses);
echo '</pre>';


//caminar atraves del array 
function upper($course)
{
    echo strtoupper($course). "<br>";
}

//RECOGER TODOS LOS ELEMENTOS DEL ARREGLO y lo muestra por medio 
//la función 'upper'
array_walk($courses, 'upper');

/*	
	/Existe un Key
	array_key_exists('frontend', $courses);

	/Existe un valor
	in_array('javascript', $courses);

	/Muestra todos los Key
	array_keys($courses);
    
	/Muestra todos los valores
	array_values($courses);
*/
