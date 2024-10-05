<?php

/** FUNCIONES ANONIMAS
 * Es una función la cual no tiene un nombre
 * Se inicializa por medio de una variable.
 * 
 * Se llama mostrado la variable.
 */

$greet = function($nombre)
{
    return "Hola, $nombre";

};

echo $greet('Juan');
echo "\n";

/** CLOSURE
 * Al pasarle a una función el parámetro Closure le indica 
 * que va ha recibir una función anónimas. 
 * Si no colocamos el closure la función va a servir igual, 
 * pero puede que se puedan dar muchos tipos de error a futuro, a
 * sí que es una buena práctica ponerlo.
 */

function greet2(Closure $lang, $name)
{
    return $lang($name);
}

$en = function($name)
{
 return "Hello, $name";
};

$es = function($name)
{
 return "Hola, $name";
};

echo greet2($en, 'Juan Jose' );
echo "\n";
echo greet2($es, 'Juan Jose' );
echo "\n";