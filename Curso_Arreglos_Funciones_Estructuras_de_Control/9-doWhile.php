<?php

//Ejemplo del como el do while se ejecuta una vez y si la condición 
//finaliza se cierra el ciclo.

do{
    echo "Este codigo se ejecuta por lo menos una vez";
}while (false);
echo "\n";

/*
Con este ejemplo se utilizo la función in_array 
la cual funciona para validar si en una variable se encuentra un campo que 
ya este un arreglo.
Si es asi no lo inserta. Si lo ingresado no esta en el arreglo, añade ese texto
ingresado por el usuario en el arreglo
*/

$usernames = ["Pepito123","Mr.Michi","RetaxMain"];

do{
    $username = readline ("Por favor, ingresa tu nuevo nombre de usuario: ");
}while ( in_array($username, $usernames) );

echo "\n";


?>