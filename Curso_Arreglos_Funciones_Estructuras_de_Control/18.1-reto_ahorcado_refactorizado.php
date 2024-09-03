<?php
//Esto lo hizo alguien en la sección de aportes. debo de entenderlo primero.

/*
1er reto: Refactorizar el codigo para que se vea mejor.
2do reto: Hacer el muñeco de ahorcado y que dependiendo de los intentos fallidos se vaya completando.
*/

//Con esta funcion limpiamos la consola.
function clear() {
    if(PHP_OS === "WINNT"){
        system("cls");
    } else{
        system("clear");
    }
}


//Aqui se hace un array con los estados por los que pasa el personaje.
$muñeco_ahorcado = [
    " +---+
      |   |
          |
          |
          |
          |
    =========",
     "
      +---+
      |   |
      O   |
          |
          |
          |
    =========", "
      +---+
      |   |
      O   |
      |   |
          |
          |
    =========", "
      +---+
      |   |
      O   |
     /|   |
          |
          |
    =========", "
      +---+
      |   |
      O   |
     /|\  |
          |
          |
    =========", "
      +---+
      |   |
      O   |
     /|\  |
     /    |
          |
    =========", "
      +---+
      |   |
      O   |
     /|\  |
     / \  |
          |
    ========="
];

$palabras_posibles = ["Gato", "Perro", "Pantera", "Tiburon", "Mosquito", "Hipopotamo", "Tigre", "Aguila", "Halcon", "Condor", "Tortuga"];

define("MAX_INTENTOS", 6);

echo "🪜 ¡JUEGO DEL AHORCADO!\n\n";

//Se inicializa el juego
$palabra_elegida = $palabras_posibles[rand(0, count($palabras_posibles) - 1)];
$palabra_elegida = strtolower($palabra_elegida);
$cantidad_palabras = strlen($palabra_elegida);
$descubre_letras = str_pad("", $cantidad_palabras, "_");
$intentos = 0;

do{

    echo "Palabra de $cantidad_palabras letras \n\n";
    echo $descubre_letras . "\n\n";

    // Pedimos al usuario que digite
    $letra_jugador = readline("Escribe una letra: " . "\n\n");
    $letra_jugador = strtolower($letra_jugador);

    if(str_contains($palabra_elegida, $letra_jugador)){
        
        // Verificar todas las ocurrencias de esta letra para remplazarla
        $offset = 0;
        while(
            ($posicion_letra = strpos($palabra_elegida, $letra_jugador, $offset)) 
            !== false
        ){
            
            $descubre_letras[$posicion_letra] = $letra_jugador;
            $offset = $posicion_letra + 1;
        }

    } else{

        clear();
        $intentos++;
        echo "Letra incorrecta 💔. Te quedan " . (MAX_INTENTOS - $intentos) . " intentos" . "\n\n";
        
        //Aqui hacemos un switch validando en que intento se encuentra el usuario en base a eso muestra al personaje que le corresponde.
        switch ($intentos) {
            case 0:
                echo $muñeco_ahorcado[0];
                break;
            case 1:
                echo $muñeco_ahorcado[1];
                break;
            case 2:
                echo $muñeco_ahorcado[2];
                break;
            case 3:
                echo $muñeco_ahorcado[3];
                break;
            case 4:
                echo $muñeco_ahorcado[4];
                break;
            case 5:
                echo $muñeco_ahorcado[5];
                break;
            case 6:
                echo $muñeco_ahorcado[6];
                break;
            default:
                echo "No se encontro muñeco";
                break;
        }
        sleep(2);

    }

    clear();

} while($intentos < MAX_INTENTOS && $descubre_letras != $palabra_elegida);

clear();

if($intentos < MAX_INTENTOS)
    echo "!FELICIDADES¡, HAS ADIVINADO LA PALABRA 😄 \n\n";
else
    echo "SUERTE A LA PROXIMA 💔 \n\n";

echo "La palabra es: $palabra_elegida \n\n";
echo "Tu descubriste $descubre_letras \n\n";

echo "\n";