<?php

//PUEDO RETIRAR MIS DONACIONES DE TWITCH?

//Para retirar mis donaciones debo tener un minimo de 100 dolares
//El sistema debe preguntar al stramer cuando dinero tiene
//tomar la desición si lo puedo retirar o no

$donaciones = readline( "Hola que tal?, Deseas retirar tu dinero? y/n :" );

$vigencia = true;

if ( $donaciones == "y" ) {
    echo(" Genial, recuerda que para poder retirar tu dinero debes tener un minimo de 100 dolares en donaciones ");
    echo "\n";
    $dinero = readline ( " Cuando dinero tienes? " );

    if ( $dinero >= 100 ){
        echo ("Genial tu dinero será depositado en tu cuenta! ");
        echo "\n";
        $vigencia = false;

    }
    if ( $dinero < 100 )
    {
        echo ("Lo siento, no podemos depositar tu dinero, debes tener un minimo de 100 dolares en donaciones");
        echo "\n";

    }
}
elseif ($donaciones == "n"){
    echo("Esta bien, lo revisaremos en otro momento.");
    echo "\n";

}
?>