<?php

// /**
//  * Función con parametros por defecto
//  * Tiene un arreglo por defecto, pero si se le mandan por parametros otro arreglo entonces ejecutará eso en vez del por defecto.
//  * default array $edades
//  * @return suma
//  */
// function sumar_edades( $edades = array(13,17,35) ){

//     return array_sum($edades);
// }
// echo sumar_edades(array(5,10,15));
// echo "\n";

/**
Los trailing commas son comas que van el apartado de los parámetros de tu función, 
lo que destaca es que estos parámetros pueden terminar con coma sin marcar error. 
Esto se encuentra en muchos lenguajes
 */
// function multiplicar(
//     $n1 = 1,
//     $n2 = 3,
//     $n3 = 3,
// )
// {
//     return $n1 * $n2 * $n3;
// }
//  multiplicar(	);


//Solo funciona con PHP >= 8.1
 
// class UnaClaseRandom {}

// class OtraClaseRandom {}

// function receive_a_class($class = new UnaClaseRandom) {
//     echo $class::class;
// }

// receive_a_class(new OtraClaseRandom); 


//error al enviar parametros por defecto.
function suma($n1, $n2 = 8) {
    return $n1 + $n2;
}

echo suma(8);

echo "\n";