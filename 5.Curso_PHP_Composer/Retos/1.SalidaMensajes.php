<?php

/*


*/

//Reto 1.
/**
 * Instrucciones: este es un clásico de clásicos, pero haremos un pequeño cambio.
 *  En lugar de solo imprimir un mensaje en pantalla, pedirás al usuario que digite
 *  un nombre y mostrarás en pantalla lo siguiente: Hola, [nombre]
 */
echo "Hola Mundo";
echo "\n";


//Reto 2.
/**
 * Instrucciones: Ahora que sabemos incluir nombres, podemos agregar más datos.
 *  Intentemos con un apellido para tener algo así: ``Hola, [nombre] [apellido]```
 */
$nombre = 'Juan Jose';
$apellido = 'Quitiaquez';

echo "Hola, " . $nombre . ' ' . $apellido;
echo "\n";


//Reto 3.
/**
 * seguro has visto que en Platzi hay más de 600 cursos
 * ¿puedes mostrar a que categorías corresponden en una 
 * sola línea de código?
 */

$categorias = ['Desarrollo e Ingenieria','Diseño y UX', 
'Marketing','Negocios y emprendimiento',
'Producción Audiovisual','Crecimiento Profesional'];

for ($i=0; $i < count($categorias) ; $i++) { 
    echo "Mira la Categorias de: ".$categorias[$i]; 
    echo "\n";
}

//Reto 4.
/**
 * Otro clásico conocido, donde pedirás al usuario que ingrese 2 números 
 * y muestre en pantalla el resultado. Si quieres añadir más dificultad puedes
 *  utilizar números con punto decimal y especificar el número de decimales después del punto.
 */

 $numeros = [];


 array_push($numeros, readline("Ingrese el primer númmero :") );
 array_push($numeros, readline("Ingrese el Segundo númmero :") );

$suma = $numeros[0] + $numeros[1];
echo "La suma de los 2 Números es: ". $suma;
echo"\n";

$decimales = explode(".", $suma);
echo "Con unos puntos decimales iguales a: .".$decimales[1];

//Reto 5.
/**
 * añadiendo un extra al reto anterior ahora el usuario ingresará 3 números,
 *  sumarás los 2 primeros y el resultado será multiplicado por el tercero.
 *  Añade las consideraciones del punto decimal del reto anterior.
 */


$multiplicar = [];
 array_push($multiplicar ,readline("Ingresa el primero número: " ));
 array_push($multiplicar ,readline("Ingresa el segundo número: " ));
 array_push($multiplicar ,readline("Ingresa el tercer número: " ));

$sum = $multiplicar[0] + $multiplicar[1];
$multiplicacion = $sum * $multiplicar[2];

if(str_contains((string) $multiplicacion, '.')  ){

    echo ("El resultado es :". $multiplicacion );
    echo ("\n");
    $decimal = explode('.',$multiplicacion); 
    echo ("Y tiene estos puntos decimales :". $decimal[1]);
    echo ("\n");
}
else
    echo ("El resultado es: ". $multiplicacion );
    echo ("\n");


//Reto 6.
/**
 * llegaste a una fiesta con X cantidad de rebanadas de pizza (indicadas por el usuario),
 * después de un rato se consumió Y cantidad de rebanadas y quedan Z. Fácil ¿cierto?
 * El reto está en que expreses lo que sucede es una forma comprensible para cualquier persona
 * imprescindible pensar en tus usuarios 
 */

$rebanadas = readline("Hola para comprar una pizza de: " ); echo "rebanadas";
echo "\n";


$restantes = readline("Ohh mirá solo quedan: ");  echo "rebanadas";
echo "\n";
$consumidas =  $rebanadas - $restantes;

echo "Estos vergajos se comieron ".$consumidas . "rebanada/s de pizza";
echo "\n";



//Reto 7.
/**
 * pide al usuario que indique su nombre y su edad. Como mensaje de salida 
 * le indicarás que edad tuvo el año pasado y cuantos años tendrá el siguiente año.
 * Ejemplo: [nombre] el año pasado tenías X años y el próximo año cumplirás Y años.
 */
$nombre = readline("Ingresa tu nombre: ");
$edad = readline("Ingresa tu edad: ");

echo $nombre. " El año pasado tenias ". ($edad - 1) . " y el proximo años cumpliras " . $edad+1 . " años";

//RETO 8.
/**
 * Vas con tus amigos a tu restaurante favorito y acuerdan dividir la cuenta. 
 * Para facilitar las cosa pedirás al usuario que indique el total a pagar, 
 * entre cuantas personas se dvidirá la cuenta, porcentaje de propina a incluir,
 * un porcentaje de impuestos, total a pagar incluyendo propina más impuestos 
 * y el total a pagar por cada persona.
 */

 $totalCuenta = readline("Ingresa el total a pagar: ");
 echo("\n");
 $personas = readline("¿En cuantas personas diviran la cuenta? ");
 echo("\n");
 $propina = readline("¿Cual será el porcetaje de propina? ");
 echo("\n");
 $impuestos = readline("¿Cual el porcentaje de impuestos?  "); 
 echo("\n");

$totalPagar = $totalCuenta + ($totalCuenta * ( $propina /100 )) + ($totalCuenta * ( $impuestos /100  )  );

echo "El total a pagar es de: ".$totalPagar;
echo "\n";

$porPersona = $totalPagar / $personas;

echo "El total a pagar por persona es : ".$porPersona;

//RETO 9:
/**
 * Escribe un programa al que le indiques una cantidad de días y como resultado
 * deberá mostrar cuantas horas, minutos y segundos hay en dicha cantidad de días.
 */

 $dias = readline("Ingresa el números de dias: ");
 
 $horas = $dias * 24; 
 echo "En ".$dias. " dia/s". " hay ".$horas. " hora/s" ;
 echo "\n";

 $minutos = $horas * 60;
 echo "En ".$dias. " dia/s". " hay ".$minutos. " minutos/s" ;
 echo "\n";

 $segundos = $minutos * 60;
 echo "En ".$dias. " dia/s". " hay ".$segundos. " segundos/s" ;
 echo "\n";

//RETO 10
/**
 * hay 1.609344 km en una milla (mi). 
 * Escribe un programa en el que el usuario indique una cantidad de millas 
 * y muestre en pantalla el resultado convertido a kilómetros.
 */
define("MILLAS", 1.609344);
$millas = readline("Ingresa la distancia en millas: ");
echo "\n";

$kilomentros = $millas * MILLAS ;
echo "La cantidad de kilometos es de: ".$kilomentros;


//RETO 11
/**
 * pide al usuario ingresar un número mayor a 1000 y otro menor a 100\. 
 * Indica de una forma sencilla de entender al usuario cuantas veces cabe
 *  el número menor a 100 en el número mayor a 1000
 */

$mayor1000 = readline("Ingrese un número mayor a 1000: ");
$menor100 = readline("Ingrese un número menor a 100: ");

$cabe = ($mayor1000/$menor100);

echo "El número ".$menor100. " cabe ". $cabe . " veces". " en el número" . " $mayor1000";




?>