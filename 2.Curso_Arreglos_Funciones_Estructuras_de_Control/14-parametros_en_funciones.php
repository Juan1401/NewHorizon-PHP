<?php

//PARAMETROS
//Segun entiendo hacen referencia a los datos que le mandamos a una función, 
//y que se son los que espera a la hora de invocarla.

// echo rand(1,1000);

$numero1 = readline( "Dame el primer número: " );
echo "\n";
$numero2 = readline( "Dame el seguudo número: " );
echo "\n";

function  get_SumaNumeros ( $numero1,$numero2 ) {

    $sumatoria = $numero1 + $numero2;

    echo("El resultado es: " . $sumatoria);
    echo "\n";
}

get_SumaNumeros($numero1,$numero2);
echo "\n";

//ejemplo del profe #1
//Con input de usuario.

function get_rankPlatzi ($platzirank){
    if ($platzirank >= 20000){
        echo("¡Eres un estudiante Legend!");
        echo "\n";

    } else {
        echo "Que carajos es eso?";
        echo "\n";
    }
    echo "\n";
}

// $platzirank_user = readline("¿Cual es tu Platzi rank?: ");
// get_rankPlatzi($platzirank_user);
// echo "\n";



//ejemplo del profe #2
//bucle con inoput de usuario llamado una funcion


do {
    $platzirank_user = (int) readline("¿Cual es tu Platzi rank?: "); //casteo a entero
    get_rankPlatzi($platzirank_user);

} while (true);


?>