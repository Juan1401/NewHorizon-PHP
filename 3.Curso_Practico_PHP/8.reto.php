<?php
//RETO 1 DE CONDICIÓNALES.

$edades = [1,3,4,6,7,8,9,11,15,16,'undefined age'];
// print_r($edades);

function bodegaxEdades($edades){

for ($i=0 ; $i < count($edades) ; $i++ ){

    if( is_int( $edades[$i]) ){  //CON LA FUNCIÓN is_int — Comprueba si el tipo de una variable es integer 
    if($edades[$i] < 5)  {
        echo "El niño de " .$edades[$i] . " año/s tiene su espacio en la parte inferior de la bodega.";
        echo "\n";
    }
    if ($edades[$i] >= 5 && $edades[$i] <= 7 ) {
        echo "El niño de " .$edades[$i] . " año/s tiene su espacio en la parte media de la bodega.";
        echo "\n";
    } 
    if ($edades[$i] > 7 ) {
        echo "El niño de " .$edades[$i] . " año/s tiene su espacio en la parte alta de la bodega.";
        echo "\n";
    }
    }else { //Sí no es integer, salta esta excepción.
        echo "El niño sin edad registrada " .$edades[$i] . " tiene su espacio igualemente en la parte alta de la bodega.";
        echo"\n";
        }
    }
}
// bodegaxEdades($edades);

//RETO 2
/* 
-Dibuja medio árbol de Navidad usando solo asteriscos como se indica en el siguiente ejemplo:
La altura de este árbol debe ser dinámica, si le dices que tendrá 10 de alto, entonces tendrá 10 asteriscos.

Tip: Usa un ciclo para realizar esta actividad.La altura de este árbol debe ser dinámica, si le dices que tendrá 10 de alto, entonces tendrá 10 asteriscos.
*/

$arbolTamaño = ((int)readline("Ingresa el tamaño del arbol: "));
echo"\n";

$arbolito = '';
for($i=0; $i<$arbolTamaño ; $i++ ){
    $arbolito .= '*';//CONCATENACIÓN
    echo $arbolito;
    echo "\n";    
}



?>