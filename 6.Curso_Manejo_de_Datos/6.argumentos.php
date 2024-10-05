<?php

/**VALORES
* Colocamos directamente una variable esperando que eso se cumpla.
*/

function greet($name)
{
    return "Hola, $name";
}
echo greet('Juan Jose');
echo "\n";


/**REFERENCIA
 * Que ademas de hacer un cambio interno en la función
 * Queremos que se haga un cambio por fuera de la función.
 *  */

$course = 'PHP';
function path($course){

    $course = 'Laravel';
    echo $course;
}

path($course); //laravel
echo "\n";
echo $course; //PHP
echo "\n";


//Cuando se pasa por referencia - Utilizando el simbolo &
$course2 = 'PHP';
function path2(&$course2){

    $course2 = 'Laravel';
    echo $course2;
}

path2($course2); //laravel
echo "\n";
echo $course2; //laravel
echo "\n";


/** PREDETERMINADO
 * Existe un valor predeterminado que es JUAN pero si le asignamos otro nombre
 * este es capaz de actualizarlo.
 */

 function pobre($name = 'JUAN')
 {
    return "Hola, $name";
 }
 echo pobre();
 echo "\n";
 echo pobre('Miguel');
 echo "\n";


?>