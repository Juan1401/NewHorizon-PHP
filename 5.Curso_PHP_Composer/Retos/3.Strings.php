<?php

// /**
//  * Reto #1 Longitud del string
//  * Pide a tu usuario que ingrese el nombre de su curso favorito, obtén la longitud de ese string y muéstralo en pantalla.
//  */
//  $cursofav = strlen(readline("Ingresa tu curso favorito: "));
//  echo "\n";
//  echo "Tu curso favorito tiene un longitud de : ". $cursofav;

// /**
//  * Reto 2
//  * Crea un programa en el que le pidas en 3 variables distintas: nombre, apellido y comida favorita. 
//  * Como salida mostrarás el mensaje 
//  * Hola,mi nombres es {nombre} {apellido} y mi comida favorita es {comida} en un solo string.
//  */

// $nombre = readline("Ingresa tu Nombre: ");
// echo "\n";
// $apellido = readline("Ingresa tu Apellido: ");
// echo "\n";
// $Comida = readline("Ingresa tu Comida Favorita: ");
// echo "\n";

// echo "Hola mi nombre es ".$nombre . " " . $apellido . "y mi comida favorita es ". $Comida ;

// /**
//  * Reto #3 Ajusta las iniciales 
//  * Ahora, pedirás a tu usuario que ingrese su nombre, apellido y país de origen en minúsculas. Después mostrarás los datos de salida con mayúscula inicial al tratarse de nombres propios.
//  */

// $nombre = ucwords(readline("Ingresa tu nombre: "));
// $apellido = ucwords(readline("Ingresa tu apellido: "));
// $pais = ucwords(readline("¿De que pais eres: "));

// echo "Hola " .  $nombre ." " . $apellido . ", asi que eres de" . " $pais";

// /**
//  * Reto #4 String fragmentado
//  * Solicita a tu usuario que indique una oración de 10 o más caracteres, la línea de un poema o canción funcioona excelente. 
//  * Calcula la longitud del string, pide un número de rango inicial y final que esté entre la longitud del string para al final mostrar el fragmento que incluya los caracteres en ese intervalo.
//  */

//  /**
//   * ORACIÓN
// I don't like my mind right now
// Stacking up problems that are so unnecessary
// Wish that I could slow things down
// I wanna let go, but there's comfort in the panic
//   */

// $oracion = "I don't like my mind right now
// Stacking up problems that are so unnecessary
// Wish that I could slow things down
// I wanna let go, but there's comfort in the panic";

// $tamano = strlen($oracion);

// echo "Escoge un rango de números entre 1 y ". $tamano;
// echo "\n";

// $rangoI = (int)(readline("Ingresa un rango inicial: "));
// echo "\n";
// $rangoS = (int)(readline("Ingresa un rango final: "));


// if($rangoS > $tamano ){
     
//      echo "ERROR";
// }
// if($rangoI > $rangoS ){
     
//     echo "ERROR escoge un rango correcto";
// }
// else 
// {
//     echo substr($oracion, $rangoI, $rangoS);
// }


// /**
//  * 
// Reto #5 Mayúsculas y minúsculas
// Solicita a tu usuario que indique 2 palabras, donde al mostrarlas en pantalla una estará totalmente en mayúsculas y otra en minúsculas ¿fácil, no?
//  */

// $palabra1 = strtoupper(readline("Ingresa una palabra: "));
// $palabra2 = strtolower(readline("Ingresa una segunda palabra: "));

// echo $palabra1 ." ". $palabra2;


// /**
//  * Reto #6 Nombres cortos y largos
// Ya sabemos trabajar con nombres ¿pero qué pasa si cumple ciertas cualidades?
// Tu usuario ingresará su nombre, si tiene una longitud mayor a 5 caracteres mostrarás un saludo con su nombre en pantalla. 
// Si tiene menos de 5 caracteres, pedirás su apellido, mostrarás el saludo con nombre y apellido. 
// En ambos casos deberás mostrarlos con mayúscula inicial.
//  */

// $nombre =  ucwords(readline("Ingresa tu nombre: "));
// $tamano = strlen($nombre);

// if($tamano > 5)
// {
//     echo "Hola que tal? $nombre";
//     echo "\n";
// }
// elseif($tamano < 5){
//     $apellido = ucwords(readline("Ingresa tu apellido: "));
//     echo "Hola que tal? $nombre" . " ". $apellido;
//     echo "\n";
// }


/**
 * Reto #7 ¡Hablemos Pig Latin! (Puerco Latino) 🐷
 * PuercoLatino es como el idioma de la “efe”, donde cambiamos las palabras bajo ciertas condiciones. En este caso será así:
La primer consonante de una palabra se pasa al final y se agrega la sílaba “ay”.
Si una palabra inicia con vocal, se agrega “way” al final.
Ejemplos:

Platzi 👉 Latzipay
Abeja 👉 Abeja
pide a tu usuario que ingrese una palabra y tradúcela a Pig Latin.
 */

 $palabra = readline("Ingresa una palabra: ");
 $primeraletra = $palabra[0];

 echo $primeraletra;

 $vocales = array(
    'a',
    'e',
    'i',
    'o',
    'u'
 );


 if (in_array($primeraletra,$vocales) ) {
    echo "$palabra"."way";
} else {
    echo "$palabra"."pay";
}



