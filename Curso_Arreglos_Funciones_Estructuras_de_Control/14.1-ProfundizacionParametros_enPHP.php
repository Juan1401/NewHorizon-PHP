<?php

// function suma($a = 1, $b = 1) {
//    echo "La suma de $a + $b es: " . $a + $b . "\n";
//}

// suma();

// $arreglo1 = [1, 2, 3];
// $arreglo2 = [4, 5, 6];

                             //ARRAY array unpacking en php

    //FORMA SENCILLA DE AGRUPAR ARREGLOS SIN LA FUNCION ARRAY MERGE.
// $resultado = [...$arreglo1, ...$arreglo2];

// var_dump($resultado);


// function suma($a, $b) {
//    echo "La suma de $a + $b es: " . $a + $b . "\n";
//}

//APROVECHO LOS ARREGOS para utilizar la función de SUMA.
//$numeros = [1, 2];
//$numeros2 = [50, 20];
//$numeros3 = [10000, 2];

//suma(...$numeros);
//suma(...$numeros2);
//suma(...$numeros3);


/*
Utilizando el array unpacking de php aplicado en un parametro de una función.

En esta caso es aplicable para que la función reciba cualquier numero de argumentos.
lo que hace en este caso es que $params se convierte en un arreglo.
Por lo cual se puede recorrer como un arreglo de toda la vida.

Se uso el foreach para recoger el arreglo que es mandado en los argumentos.
para luego si sumar cada número despues de cada iteración.

Gracias a esto se pudo hacer la suma infinita.
*/
function suma_infinita(...$params) {

    $suma = 0;
    
    foreach ($params as $numero) {
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n";

}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);

echo "\n";

?>