<?php

$courses =[
   10 => 'php',
   100 => 'javascript',
   1000 => 'laravel'];
//Ascedente
echo '<pre>';
sort($courses);
print_r($courses);
echo '<br>';

//Descendente
rsort($courses);
print_r($courses);
echo '<br>';

//ORDENAR POR EL KEY del arreglo.
ksort($courses);
print_r($courses);
echo '<br>';

//Key de manera desendente
krsort($courses);
print_r($courses);
echo '<br>';

/**
 * Array Slice
 * Sirve para determina desde donde queremos que se muestre una arreglo.
 * 
 */
//Solo mostrar la información apartir de la key 1 del arreglo.
 var_dump(array_slice($courses, 1));
 echo '<br>';


/**
 * Array Chuck
 * Divide un array en fragmentos.
 */

 var_dump(array_chunk($courses, 2));
 echo '<br>';

 /**
  * array_shift()
  * Eliminar el primer elemento y retornarlo.
  */

//Quita un elemento del principio del array.
  array_shift($courses);

//Extrae el último elemento del final del array.
  array_pop($courses);

//Añadir al inicio de un array uno a más elementos.
  array_unshift($courses);

//Inserta uno o más elementos al final de un array.
  array_push($courses,'JAVA');

//INTERCAMBIO EL VALOR POR EL KEY "LOS INTERCAMBIA"
  array_flip($courses);