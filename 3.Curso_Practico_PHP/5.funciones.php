<?php 

// $nombre = "Juan Jose";
// $apellido = "Quitiaquez";

echo "--FUNCION CONCATENAR NOMBRE--\n\n";
function concatenar($nombre, $apellido){
    $concatenar = $nombre.' '.$apellido;
    // return $concatenar;
    echo  $concatenar;

}
concatenar("Juan Jose","Quitiaquez"); echo"\n\n";



//SUMA DE NUMEROS DE UN ARREGLO.
echo "--FUNCION SUMAR NÚMEROS DE UN ARREGLO--\n\n";

$numeros = [1,2,3,4];

function sumaNumerosArreglos( $numeros){
    $suma = 0;
    for ($i=0; $i<4; $i++ ){
        $suma = $numeros[$i] + $suma;
    }
    echo $suma;
    // foreach($numeros as $numeros){
    //         $suma = $numeros + $suma;
    // }
    // echo $suma;
}
sumaNumerosArreglos($numeros);


echo "--FUNCION VER SI ES UN ARREGLO--\n\n";

$names = ['Ana', 'Juan', 'Camila'];

//is_array($array); sirve para ver si es array
var_dump(is_array($names));


?>