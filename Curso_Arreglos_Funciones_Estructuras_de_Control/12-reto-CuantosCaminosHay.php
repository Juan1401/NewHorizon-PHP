<?php
//RETO DE CUANTOS CAMINOS HAY.

/*
1.
PREGUNTAR A QUE TIENDA QUIERO LLEGAR POR MEDIO DE UN NÚMERO.
2.
GUARDARLO EN UNA VARIABLE
3. 
El programa debe de decirme cuantos caminos hay para llegar desde la 
primeta tienda hasta la seleccioana por el usuario.
*/

//a nivel de codigo creo que tengo que realizar un contador por que 
//la condidición es iniciar en 1.


$tienda_usuario = readline("A qué número de tienda deseas llegar? ");

$ultimo = array(1);

for($i = 1; $i < $tienda_usuario; $i++) {
   
   
    $conteo_arreglo = $i - 1;  //2
    $posibilidades = $i + $ultimo[$conteo_arreglo]; 

    array_push($ultimo, $posibilidades); //4
    print_r($ultimo);
    echo("\n");

    // echo("esto es posibilidades: " . $posibilidades);
    echo("\n");
}

// for( $i = 1; $i<$tienda_usuario;  $i ++ ){
    

//         $veces = $i + el que se almcene de ultimo ;

//     echo("esto es veces: " . $veces);
//     echo("\n");

//     echo("\n");
    
// }

?>