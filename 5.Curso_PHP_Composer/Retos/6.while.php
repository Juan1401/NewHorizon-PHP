<?php

/**Reto #1 - Suma hasta cincuenta
Crea una variable que se llame total, después pide a tu usuario que ingrese un número y lo sume al valor de total. 
Haz que esto se repita hasta que el valor de total sea mayor a 50 y muestra el resultado en pantalla.
*/

// $total = 0;

// while($total <= 50){
//     $numero = readline("Ingrese un número que se sumára al total: ");
//     $total = $numero + $total;
// }
// echo "El total de sumataria es: ".$total;


/**
 * Reto #2 - Más allá del cuarenta y dos
Crea un código que pida al usuario un número y se repita hasta que coloque un número mayor a 42.
Cuando se cumpla esta condición muestra el resultado en pantalla indicando esto al usuario y finaliza el ciclo.
*/
// $numero = 0;
// while($numero<=42)
// {
//     $n = readline("Ingrese un número mayor a 42: ");
//     $numero = $n;

//     if($numero>42)
//     {
//         echo "El numero $numero es mayor a 42: ";
//     }
// }

/**
 * Reto #3 - Sumas consecutivas
Pide al usuario que ingrese dos números y los sume. Después pregunta si quiere añadir otro número: si la respuesta es afirmativa añádelo al total; 
en caso contrario finaliza el ciclo y muestra el resultado total en pantalla.
 */

//  $num1 = readline("Ingresa el primer número: ");
//  $num2 = readline("Ingresa el segundo número: "); 
//  $pregunta =  strtolower(readline("Deseas agregar otro número? si o no :"));
//  $total = $num1 + $num2;

//  while($pregunta == 'si'){
//     $numadicioanl = readline("Que número deseas agregar?");
//     $pregunta =  strtolower(readline("Deseas agregar otro número? si o no :"));
//     $total += $numadicioanl;
//  }

//  echo ("El total de la sumatoria fue: ".$total );


/**
 * Reto #4 - Lista de invitados
Estás organizando un banquete al que quieres invitar a tus amigos. 
Crea un programa que pida el nombre de uno de tus amigos, al hacerlo aumenta en uno una variable contadora, 
después pregunta si quieres invitar a alguien más: si la respuesta es afirmativa entonces pregunta por una persona más;
 en caso contrario cierra el ciclo y muestra en pantalla cuantos invitados son.
 */

// $amigos = [];
// $contadora = 1;
// $amigo = readline("A que amigos deseas invitar?, Ingresa su nombre: ");
// array_push($amigos,$amigo);

// $pregunta =  strtolower(readline("Deseas agregar un amigo mas si o no :"));

//  while($pregunta == 'si'){
//         $contadora ++ ;
//         $amigoadicional = readline("Ingresa su nombre: ");
//         array_push($amigos,$amigoadicional);
//         $pregunta =  strtolower(readline("Deseas agregar un amigo mas si o no :"));
//     }
// echo "El número de amigos invitados fue de: $contadora \n";
// print_r($amigos);


/**
 * Reto #5 - Adivina el número secreto
Crea un programa donde tendrás la variable numero_secreto, la cual toma un valor aleatorio entre 1 y 100. 
Después pide a tu usuario que indique un número para intentar adivinarlo: en caso de acertar indícale cual 
era el número secreto y cuantos intentos le tomó; en caso contrario indícale si el número ingresado es mayor o menor al número secreto.
 */

//  $numero_secreto = rand(1,100);
//  $contador ++;
//  echo "\n";
//  echo $numero_secreto;
//  $numUser = (int)readline("Adivina el un npumero secreto del 1 al 100: \n");
//  echo "\n";

//  while ($numUser!=$numero_secreto)
//  {
//      $contador ++;
//     $numUser = (int)readline("Adivina el un npumero secreto del 1 al 100: \n");
//  }
//  echo "Felicidades lo encontraste, Número de intentos: #$contador, el número era el:  $numero_secreto";


/**
 * Reto #6 - “Un elefante se balanceaba…”
Escribe un programa que inicie mostrando en pantalla la letra de “Un elefante se balanceaba” iniciando con el número 1, 
después pregunta al usuario cuantos elefantes más se balancearán y debe responder un número más al mostrado. 
En caso de ingresar un número diferente pedirle que intente de nuevo y repetir el ciclo hasta tener 10 elefantes.
Tomar en cuenta cuando el texto muestra un solo elefante y varios elefantes.
Ejemplo de inicio:
 */

 const UN_ELEFANTE = "1 elefante se balanceaba\nSobre la tela de una araña\nComo veía que resistía\nFueron a llamar otro elefante\n";
 echo UN_ELEFANTE;
 $contador = 1;
 
 while ($contador < 10) {
     $elefantes_user = (int)readline("¿Cuántos elefantes más se balancearán? (Debe ser $contador + 1): ");
 
     // Verifica que el usuario ingrese el número correcto
     if ($elefantes_user == $contador + 1) {
         $contador++;
         
         // Mostrar el mensaje correcto según la cantidad de elefantes
         if ($contador == 1) {
             echo "1 elefante se balanceaba\nSobre la tela de una araña\nComo veía que resistía\nFueron a llamar otro elefante\n";
         } else {
             echo "$contador elefantes se balanceaban\nSobre la tela de una araña\nComo veían que resistía\nFueron a llamar otro elefante\n";
         }
     } else {
         echo "Intente de nuevo por favor. Debe ingresar $contador + 1.\n";
     }
 }
 
 echo "¡Se completó el juego con 10 elefantes!\n";