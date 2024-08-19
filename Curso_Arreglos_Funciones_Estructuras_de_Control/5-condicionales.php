<?php

//PUEDO ENTRAR A VER LA PELICULA?
$asientos_disponibles = readline("Hola cuantos asientos hay disponibles? ");
$eres_hijo_TomHolland = readline("Hola cuantos asientos hay disponibles y/n?");
echo("\n");

if ($asientos_disponibles >0)
{
    echo("Puedes ingresar a ver la pelicula de Spidey");
}else if ($eres_hijo_TomHolland == 'y') {
    echo("Como eres hijo de Tom Holland no necesitas entradas");
}else{
    echo("Lo siento te tocará Spoilearte");
}
echo("\n");

?>