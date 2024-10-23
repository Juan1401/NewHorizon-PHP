<?php 

// /**
//  * Reto 1 
//  * Número mayor y menor y diferencia
//  */
// $num1 = (int)readline("Ingresa el primer número: ");
// echo "\n";
// $num2 = (int)readline("Ingresa el segundo número: ");
// echo "\n";

// //logica.

// if ($num1>$num2) {
//     echo 'El número:'. $num1 . " Es mayor";
//     echo "\n";
//     echo 'La diferencia es de: ' . $num1 - $num2;
// }
// else if ($num1<$num2) {
//     echo "El número:" . $num2 . " Es mayor";
//     echo "\n";
//     echo 'La diferencia es de: '. $num2 - $num1;
// }
// else if ($num1==$num2) {
//     echo "Los números son iguales";
//     echo "\n";
// }
// else {
//     echo "ERROR INESPERADO";
// }


// /**
//  * Reto 2 - En el rango, por favor.
//  * 
//  */

// $num1 = readline("Ingrese el primer número: ");
// $num2 = readline("Ingrese el segundo número: ");

// if($num1>$num2)
// {
//     echo "El número ". $num2 . "se encuentra en el rango, gracias" ;
// }
// else {
//     echo "El número ". $num2 ." excede el límite permitido.";
// }


// /**
//  * Reto #3 - Rangos cambiantes.
//  * Nuevamente pide a tu usuario que indique 3 números: un límite superior, 
//  * un límite inferior y uno de comparación. Si el número de comparación se encuentra entre los 2 primeros,
//  * comunicarlo en pantalla. En caso estar por debajo del límite inferior o por arriba del límite superior, 
//  * también mostrarlo en pantalla.
//  */
// $num1LS = (int)readline("Ingresa el Limite Superior: ");
// $num2LI = (int)readline("Ingresa el número del Limite Inferior: ");
// $num3C = (int)readline("Ingresa el número de Comparación: ");

// if ($num3C <= $num1LS && $num3C >= $num2LI) {
//     echo "El número " . $num3C . " está dentro del rango " . $num2LI . " - " . $num1LS . "\n";
// }
// // Verificar si está por encima del límite superior
// elseif ($num3C > $num1LS) {
//     echo "El número " . $num3C . " está por encima del límite superior " . $num1LS . "\n";
// }
// // Verificar si está por debajo del límite inferior
// elseif ($num3C < $num2LI) {
//     echo "El número " . $num3C . " está por debajo del límite inferior " . $num2LI . "\n";
// }

// /**
//  * Reto 4
//  *  “I like turtles”
//  * Escribe un programa que pida al usuario ingrese su animal favorito, 
//  * si coloca ‘Tortuga’, ‘tortuga’, ‘TORTUGA’ o cualquier otra variante de la palabra entonces mostrar en pantalla “También me gustan las tortugas”. 
//  * En caso contrario mostrar el mensaje “Ese animal es genial, pero prefiero las tortugas”.
//  */

// $animal_fav = strtolower(readline("Ingresa tu animal favorito: "));

// if($animal_fav == "tortuga")
// {
//     echo "También me gustan las tortugas";   
// }
// else{
//     echo "Ese animal es genial, pero prefiero las tortugas";   
// }

/**
 * Reto #5 - ¿Cómo está el clima?
 * Crea un programa que pregunte al usuario si está lloviendo, 
 * en caso de responder “sí” pregunta si está haciendo mucho viento y si responde “sí” 
 * nuevamente muestra un mensaje indicando que hace mucho viento para salir con una sombrilla. 
 * En caso contrario, anima al usuario a que lleve una sombrilla. Para el caso de responder “no” en la primer pregunta, 
 * entonces solo desea un bonito día. Considera que las respuestas pueden pasarse a minúsculas para evitar posibles errores.
 */

// $lloviendo = strtolower(readline("Esta lloviendo? - responde si o no? "));

// if($lloviendo == "si"){
//     $viendo = strtolower(readline("Esta ventiando mucho? - responde si o no? "));

//     echo "LLeva una sombrilla pues...";
//     echo "\n";

//     if($viendo == "si"){
//         echo "Hace mucho viento como para que lleves una sombrilla no?.";
//     }
// }
// elseif ($lloviendo == "no") {
//     echo "Chimba de dia mano";
// }
// else{
//     echo "Error inesperado.";
// }


// /**
//  * Reto #6 - Edad permitida
//  * Pide al usuario que ingrese su edad y mostrarás un mensaje correspondiente si esta coincide con las siguientes condiciones:
//  * Más de 30 años: Nunca es tarde para aprender ¿Qué curso tomaremos?
//  * Entre 29 y 18 años: Es un momento excelente para impulsar tu carrera.
//  * Menos de 18 años: ¿Sabes hacia dónde dirigir tu futuro? Seguro puedo ayudarte.
//  */

// $edad = ((int)(readline("Ingresa tu edad: ")));

// if ($edad > 30) {
//     echo "Nunca es tarde para aprender ¿Qué curso tomaremos?";
// }
// elseif($edad >= 18 && $edad <= 29){
//     echo "Es un momento excelente para impulsar tu carrera.";
// }
// elseif($edad < 18 ){
//     echo "¿Sabes hacia dónde dirigir tu futuro? Seguro puedo ayudarte.";
// }

/**
 * Reto #7 - Mensajes opcionales
 * Crearás un un script para el que el usuario indicará un número entre 1 y 6. Como respuesta se le brindará un mensaje según el número leido:
1 - “Hoy aprenderemos sobre prorgamación”
2 - “¿Qué tal tomar un curso de marketing digital?
3 - “Hoy es un gran día para comenzar a aprender de diseño”
4 - ¿Y si aprendemos algo de negocios online?
5 - “Veamos un par de clases sobre producción audiovisual”
6 - “Tal vez sea bueno desarrollar una habilidad blanda en Platzi”
En caso indicar un número distinto, pedir al usuario que ingrese uno en el rango válido.
 */

 $num = ((int)readline("Ingresa un número del 1 al 6: "));
 if($num > 6 && $num < 1){
    echo "El número ingresado no es correcto ";
    
    
 }
 if($num <= 6 && $num >= 1){

    switch ($num) {
        case 1:
            echo "Hoy aprenderemos sobre prorgamación";
            echo "\n";
            break;
        case 2:
            echo "¿Qué tal tomar un curso de marketing digital?";
            echo "\n";  
            break;
        case 3:
            echo "Hoy es un gran día para comenzar a aprender de diseño";
            echo "\n";  
            break;
        case 4:
            echo "¿Y si aprendemos algo de negocios online?";
            echo "\n";  
            break;
        case 5:
            echo "Veamos un par de clases sobre producción audiovisual";
            echo "\n";
            break;
        case 6:
            echo "Tal vez sea bueno desarrollar una habilidad blanda en Platzi";
            echo "\n";
            break;
        default:
            echo "Error fatal";
            break;
    }
 }
 else{
    echo "Número de fuera del rango";
 }