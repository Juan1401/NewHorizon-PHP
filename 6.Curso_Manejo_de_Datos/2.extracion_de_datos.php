<?php

/** 
 Extraer un caracter.
*/
//Extraemos un caracter de un caracter
$data = 'Estudio PHP';
echo $data[0];
echo '<br>';

/**
 Extraer un texto gracias a la función substr
    +//Se extraer el texto de la variable post deses la posición 0 a la 20
 */

//Extraccion de un texto
$post = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At odio, atque esse, illo quae nemo cumque quo in labore neque quod soluta quisquam modi saepe ipsa, eaque repellendus eum doloribus.";
$extract = substr($post, 0, 20);
echo "$extract... [ver más] <br>";


/**
 Convertir un texto en array
 */

$data = 'javascript, PHP, Laravel';
$extract =  explode(',',$data);
print_r($extract);
echo '<br>';


/**
 Convertir un array a un texto
 */
$courses = ['javascript','php','laravel'];
echo implode(',',$courses);
echo '<br>';


/**
 Eliminar espacios

    Recordar que tambien se puden quitar los espacios unicamente de la izquierda o la derecha
    con la función ltrim ó rtrim
 */

$course = "      Curso de PHP      ";
$course = trim($course);
echo '<pre>';
echo "Quiere aprender $course , y otro texto";