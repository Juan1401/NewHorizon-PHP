<?php
//Casos de Uso
// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21

/*  
*Ya se que tengo que sumar el numero actual + el numero anterio para que me de
el numero de posibilidades

*/

$numero_de_tiendas = 8;
$anterior = 0;
$actual = 1;

//Se inicia en 2 porque es la primera opción del reto debido a que ya estamos en 1
for($i=2; $i<=$numero_de_tiendas; $i++ ){

    $temporal = $actual; //aun no se ha sobreescrito.
    $actual = $actual + $anterior;
    $anterior = $temporal;//ahora la variable anterior es del valor de la actual por ende cuando se genere la otra iteración la variable anterior tendra el valodr de la anterior pero de la anterior iteración 

    echo $actual;
    echo "\n";
}


?>