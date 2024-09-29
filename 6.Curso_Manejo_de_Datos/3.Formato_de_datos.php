<?php

/**
 * Alterar datos
 */

 $text = "PHP es UN LENGUAJE";

 echo strtolower($text);
 echo "<br>";
 echo strtoupper($text);
 echo "<br>";

 //PRIMERA LETRA EN MINISCULA
 echo lcfirst($text);
 echo "<br>";

 //PRIMERA LETRA EN MAYUSCULA
 echo ucfirst($text);
 echo "<br>";

/**
 * Reemplazar
 */

$slug = str_replace(' ','-',$text);
echo $slug;
echo "<br>";

/**
 * Modificación
 * str_pad ( $variable,tamaño,campo a insertar, funciones adicionales);
 * 
 * STR_PAD_LEFT (Añade el texto todo a la izquierda)
 * STR_PAD_RIGHT (Añade el texto todo a la derecha)
 * STR_PAD_BOTH (Añade el texto todo a la ambos lados)
 * 
 */
$code = 39;
echo str_pad($code,10,'#',STR_PAD_BOTH);
echo "<br>";

$text2 = "<h1>PHP es un Lenguaje</h1>";

echo $text2;
echo "<br>";

//elimina etiquetas HTML de una string
echo strip_tags($text2);
echo "<br>";

/**
 * MONOBYTE Y MULTIBYTE
 * 
 * Al ser monobyte los caracteres especiales no se verán afectados por la función.
 * 
 */

 $text3 = "PHP es un Lenguaje, año 2024, programación";
 echo strtoupper($text3);
 echo "<br>";

 //Con la adición de la función mb_ se vuelve MULTIBYTE el texto.
 echo mb_strtoupper($text3);
 echo "<br>";


