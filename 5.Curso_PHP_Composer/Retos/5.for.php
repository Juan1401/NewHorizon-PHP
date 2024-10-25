<?php

// /**
//  * Reto #1 - Curso favorito
// Pide a tu usuario que indique cual es su curso favorito de Platzi e imprímelo en pantalla 8 veces.
//  */
// $cursofav = readline("Ingresa tu curso favorito: ");

// for ($i=1; $i <= 8; $i++  ){
//     echo $i.". Tu curso favorito es: ".$cursofav."\n";
// }

/**
 * Reto #2 - Curso favorito ‘n’ veces
Toma el reto anterior, pero ahora pregunta al usuario cuantas veces quiere mostrar el mensaje.
¿Qué pasa si coloca cero como respuesta? 🤔

### Reto #3 - Curso en una columna
Nuevamente, pide a tu usuario que indique su curso favorito de Platzi pero ahora muestra un caracter por línea de forma que puede parecer el inicio de un acróstico.
 */

// $cursofav = (string)readline("¿Cual es tu curso favorito?: ");
// $veces = (int)readline("¿Cuantas veces deseas mostrarlo?: ");

// if($veces>0){
// for ($i=1; $i <= $veces  ; $i++) { 
//     echo $i.". Tu curso favorito es: ".$cursofav."\n";
// }
// }else{
//     echo "Que haces con tu vida?"."\n";
// }

/**
 *### Reto #3 - Curso en una columna
Nuevamente, pide a tu usuario que indique su curso favorito de Platzi pero ahora muestra un caracter por línea de forma que puede parecer el inicio de un acróstico.
 */

//  $cursofav = readline("¿Cual es tu curso favorito?: ");
 
//  for ($i=0; $i < strlen($cursofav)  ; $i++) { 

//      echo $i.". Tu curso favorito es: ".$cursofav[$i]."\n";
//  }

/**
 * Reto #4 - Animal en columna ‘n’ veces.
Toma como base el reto anterior, pide a tu usuario que indique su animal favorito 
y después muéstralo con un caracter por línea.
 Esto debe repetirse un número de veces que ya hayas preguntado a tu usuario.
 */

//   $animalfav = readline("¿Cual es tu animal favorito?: ");
//   $veces = readline("Cuantas veces quieres que se repita: ");

//  for($j= 0; $j < $veces; $j++){
//     for ($i=0; $i < strlen($animalfav)  ; $i++) { 

//         echo "Tu animal favorito es: ".$animalfav[$i]."\n";

//     }
//         echo "--------------------\n";
// }
 

// /**
//  * Reto #5 - Tabla de multiplicar
//     Pide a tu usuario un número, luego de ello muestra la tabla de multiplicar de ese número del 1 al 10.
//  */

// $num = readline("Ingresa un Número: ");

// for ($i=1; $i <= 10 ; $i++) { 
//     echo "$i * $num = ".$i*$num."\n";
// }


// /**
//  * Reto # 6 - Cuenta regresiva
// Pide a tu usuario un número, después imprime una cuenta regresiva uno a uno, desde ese número hasta 0. Esto aplica también para números negativos.
//  */

// $numero = (int)readline("Ingresa un número: ");

// for ($i=$numero, $j=0 ; $j <$numero; $i--, $j++) { 
//     echo $i."\n";
// }


// /**
//  * Reto #7 - Curso favorito, sin exagerar
// Toma como base el Reto #2, pero agrega como condiciones las siguientes:
// Si el número ‘n’ es mayor a 15, solo imprimirás el nombre del curso 3 veces e indicarás que ‘n’ es un número muy grande.
//  */

// $cursofav = (string)readline("¿Cual es tu curso favorito?: ");
// $veces = (int)readline("¿Cuantas veces deseas mostrarlo?: ");



// if($veces>15){
//     echo "$veces es un número muy grande\n";
//     for ($i=1; $i <= 3  ; $i++) { 
//         echo $i.". Tu curso favorito es: ".$cursofav."\n";
//     }
// }else{
//     for ($i=1; $i <= $veces  ; $i++) { 
//         echo $i.". Tu curso favorito es: ".$cursofav."\n";
//     }
// }


/**
 * RETO 8
 * Crearás un programa que pedirá a tu usuario 4 números, uno por uno. Al indicarlo preguntarás al usuario si desea sumarlo al total, 
 * si la respuesta es afirmativa se sumará. Al final debes mostrar el valor de la suma de aquellos números que fueron aceptados para la suma
 */

// $sumatoria = 0;
// for ($i=0; $i < 4 ; $i++) { 

//     $num = readline("Ingresa un número # \n");
//     $respuesta = strtolower(readline("Desea agregarlo a la sumatoria? si o no? \n"));
//     if($respuesta == 'si')
//     {
//         $sumatoria = $sumatoria + $num;
//     }elseif($respuesta == 'no')
//     {
//         echo "Esta bien, no se sumará \n";
//     }
//     else
//     {
//         echo "Comando no indentificado";
//     }
// }
// echo "La sumatoria autorizada fue por: ".$sumatoria;

/**
Reto #9 - Recta numérica
Escribe un programa donde preguntes a tu usuario si desea una recta numérica positiva o negativa, 
después pide un número que servirá como límite e imprime todos los números de uno en uno partiendo desde el cero.
 */

$recta = readline("Quieres un reta númerica positva o negativa? escriba + o - :");
$numero = readline("De que tamaño deseas que sea la recta: ");

if($recta == '+'){
    for ($i=0; $i <= $numero  ; $i++) { 
        echo "# ".$i."\n";
    }
}
elseif($recta == '-'){

    $numero = $numero - ($numero * 2);
    for ($i=0; $i >= $numero  ; $i--) { 
        echo "# ".$i."\n";
    }
}
else{
    echo "Comando invalido";
}






?>