<?php

// FUNCION PARA LIMPIAR LA PANTALLA
function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    } else {
        system("clear");
    }
}

$posibles_palabras = array("Bedida","Prisma","Ala","Dolor","Piloto","Baldosa",
"Terremoto","Asteroide","Gallo","Platzi"
);

DEFINE("INTENTOS_MAXIMOS", 6);

echo "Juego del ahorcado \n\n";

// INICIALIZAMOS EL JUEGO
// ESCOLLER UNA PALABRA ALEATORIA DEL ARREGLO.
$palabra_aleatoria = rand(0, count($posibles_palabras) - 1);

$palabra_escogida = strtolower($posibles_palabras[$palabra_aleatoria]);

// SABER EL NÚMERO DE LETRAS QUE TIENE LA PALABRA ESCOGIDA.
$numero_letras = strlen($palabra_escogida);

// STR PAD con esta función str_pad ponemos el número de letras que se escogió de manera aleatoria pero mostradas con un _ para que nos sepamos qué palabra es.
$letras_descubiertas = str_pad("", $numero_letras, "_"); 
$intentos = 0;

do {
    echo $palabra_escogida. "\n";
    echo "Palabra de " .$numero_letras . " letras\n\n";
    echo $letras_descubiertas ."\n\n";

    // PEDIMOS AL USUARIO QUE ESCRIBA
    $letras_jugador = readline("Escribe una letra: ");
    $letras_jugador = strtolower($letras_jugador);

    // VERIFICAR SI LA LETRA SE ENCUENTRA EN LA PALABRA ESCOGIDA
    if (str_contains($palabra_escogida, $letras_jugador)) {

        // VERIFICAMOS TODAS LAS OCURRENCIAS DE ESTA LETRA PARA REEMPLAZARLA.
        $offset = 0;
        while (($posicion_letra = strpos($palabra_escogida, $letras_jugador, $offset)) !== false) {
            
            // Crear una nueva cadena con la letra descubierta
            $letras_descubiertas = substr_replace($letras_descubiertas, $letras_jugador, $posicion_letra, 1);
            // Actualizar el offset para buscar la siguiente ocurrencia
            $offset = $posicion_letra + 1;
        }
    } else {
        clear();
        $intentos++;
        echo "Letra incorrecta :( Te quedan ". (INTENTOS_MAXIMOS - $intentos) . " intentos.\n";
    }
    clear();

} while ($intentos < INTENTOS_MAXIMOS && $letras_descubiertas != $palabra_escogida);
clear();

if ($intentos < INTENTOS_MAXIMOS)
    echo "!Felicidades! Has adivinado la palabra. \n\n";
else 
    echo "Suerte para la proxima, amigo,\n\n";

echo "La palabra es: " . $palabra_escogida . "\n\n";
echo "Tu descubriste " . $letras_descubiertas . "\n\n";


echo "\n";

//PROXIMO RETO ESTA EN, COLOCAR EL MUÑEQUITO DE AHORCADO CADA VEZ QUE SE VAYA PERDIENDO UN INTENTO
//REFACTORIZAR EL CODIGO.

?>
