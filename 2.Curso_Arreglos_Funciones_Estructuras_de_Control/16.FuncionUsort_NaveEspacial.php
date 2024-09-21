<?php

//lista de arreglos desordenada
$precios_de_cafes = [12, 56, 32, 89, 2, 1];

//se usa la función usort para pasarle el arreglo y a su vez una función anonima
//con la cual se le pasan dos paarametrps
//lo que va a hacer es va a ir asignandole a cada variable un valor del arreglo.

//primera iteración a=12 y b=56
//segunda itración a=56 y b=32 etc..
//seguido de eso se utilizó el operador de nave espacial
//para que si el valor a < b entonces devuelva un -1
//si son iguales devuelbe un cero
//si b > a entonces devuelve un 1

//en conjunto esto hará que el arreglo sea organizado de menor a mayor.

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump( $precios_de_cafes );