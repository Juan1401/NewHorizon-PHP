<?php 

/*
Comillas simples

El texto se muestra en un texto de una linea

- El backslash no permite colocar mas texto 
*/
echo 'Un texto de una linea
Varias lineas
comilla simple \' backslash \\ continuar con mas texto 
$variable <br>';


/*
Comillas dobles

Nos permite mostrar variables sin necesidad de concatenación,
como seria el caso para cuando se use comillas simples.
*/
$name = 'italo';

echo "Mi nombre es $name <br>";


/*
Datos Complejos con comillas
*/

$course = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];



?>