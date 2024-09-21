<?php
//RETO DE CUANTOS CAMINOS HAY.
/*
1.
PREGUNTAR A QUE TIENDA QUIERO LLEGAR POR MEDIO DE UN NÚMERO.
2.
GUARDARLO EN UNA VARIABLE
3. 
El programa debe de decirme cuantos caminos hay para llegar desde la 
primera tienda hasta la seleccioana por el usuario.
*/

/* SECUENCIA
2 -> 1
3 -> 2
4 -> 3
5 -> 5
6 -> 8
7 -> 13
8 -> 21
*/

//a nivel de codigo creo que tengo que realizar un contador por que 
//la condidición es iniciar en 1.

// $tienda_usuario = readline("A qué número de tienda deseas llegar? ");

/*
a sucesión de Fibonacci se trata de una serie infinita de números naturales que empieza con un 0 y un 1 y continúa añadiendo números que son la suma de los dos anteriores:
*/
//Lo saque de un comentario - no pude a la primera.
$tienda_usuario = 8;
$aux = 0;
$result = 1;
for ($i=1; $i < $tienda_usuario; $i++) { 

    $result = $result + $aux;
    $aux = $result - $aux;
}
echo $result;

?>