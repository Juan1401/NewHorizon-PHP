<?php

// /**
//  * Reto #1 - Multiplicar decimales
//  * Pide a tu usuario que ingrese 2 números con decimales (cuantos más mejor) y muestra el resultado de multiplicarlos ¿fácil, no?   
//  */

//  $decimal1 = (float)readline("Ingresa un número decimal: ");
//  echo "\n";
//  $decimal2 = (float)readline("Ingresa un segundo número decimal: ");
//  echo "\n";

// $multiplcación = $decimal1 * $decimal2;
// echo "El resultado es: ". $multiplcación;
// echo "\n";
// /**RETO 2 */
// echo "El resultado en npumeros enteros es: ". (int)$multiplcación;


// /**
//  * Reto #3 - Raíces cuadradas redondeadas
// Pide a tu usuario que ingrese un número, cuyo valor debe ser mayor a 20, 
// luego calcula su raíz cuadrada y reduce a 2 o 3 decimales el resultado final.
//  */

//  $num = (float)readline("Ingresa un número mayor a 20: ");
//  echo "\n";
//  if ($num > 20) {
//      $raiz = sqrt($num); // Calcular la raíz cuadrada
//      $raiz_redondeada = round($raiz, 3); // Redondear la raíz a 3 decimales
//      echo "La raíz cuadrada redondeada es: " . $raiz_redondeada;
//      echo "\n";
//  } else {
//      echo "El número ingresado es menor a 20.";
//      echo "\n";
//  }
 
// /**
//  * Reto #4 - Calcular área de un círculo
// Solicita a tu usuario que ingrese un número el cual será el radio de un círculo y con este dato calcula el área de un círculo.
// Si tu lenguaje cuenta con librerías específicas para este propósito haz uso de las mismas.
//  */

// $radio = (float)readline("Ingresa el radió de tu circulo: ");
// echo "\n";
// $pi = pi();

// $area = ($pi*($radio**2));
// echo "El area del circulo es: ".$area;

// /**
//  * Reto #5 - Calcular volumen de un cilindro
// Pide a tu usuario que indique el radio y la profundidad de un cilindro. 
// Después aplica la fórmula correspondiente para calcular el volumen del cilindro y reduce el resultado a un solo decimal.
//  */

// $radioC = (float)readline("Ingresa el radio del cilindro: ");
// echo "\n";
// $profundidad = (float)readline("Ingresa la profundidad del cilindro:" );
// echo "\n";

// $pi = pi();

// $resultado = ($pi *  ($radioC**2)  * $profundidad) ;
// echo "El volumen del cilindro es: $resultado";
// echo "\n";
// echo "El volumen reducido a un decimal: ". round($resultado,1);


// /**
//  * Reto #6 - Mostrar enteros y residuos
// Pide al usuario que ingrese 2 números, divídelos, 
// muestra un resultado como enteros y además el residuo por separado de una forma que seal fácil de entender al usuario.
// Por ejemplo: “9 dividido entre 2 es 4 y sobra 1”.
// */

// $num1 = readline("Ingresa el primer número: ");
// echo "\n";
// $num2 = readline("Ingresa el segundo número: ");
// echo "\n";

// $resultadoDivision = ($num1 / $num2);
// $resultadoResiduo = ($num1 % $num2);

// echo "$num1 dividio entre " . $num2 . " es: ". (int)$resultadoDivision ." y sobra ". $resultadoResiduo;


/**
 * Reto #7 - Calcular perímetros y áreas
Muestra un menú con distintas figuras geométricas, por lo menos 3 diferentes (triángulo, cuadrado, pentágono, etc.)
Tu usuario debe poder elegir alguna de estas figuras, indicar la distancia de sus lados y 
mostrar como resultado tanto el perímetro como el área de dicha figura
 */

 function calcularTrianguloEquilatero($lado) {
    $perimetro = 3 * $lado;
    $area = (sqrt(3) / 4) * pow($lado, 2);
    return ["perimetro" => $perimetro, "area" => $area];
}

function calcularCuadrado($lado) {
    $perimetro = 4 * $lado;
    $area = pow($lado, 2);
    return ["perimetro" => $perimetro, "area" => $area];
}

function calcularPentagono($lado) {
    $perimetro = 5 * $lado;
    // Fórmula del área de un pentágono regular con apotema aproximada
    $apotema = $lado / (2 * tan(deg2rad(36))); 
    $area = ($perimetro * $apotema) / 2;
    return ["perimetro" => $perimetro, "area" => $area];
}

echo "Selecciona una figura geométrica:\n";
echo "1. Triángulo equilátero\n";
echo "2. Cuadrado\n";
echo "3. Pentágono\n";
$opcion = (int)readline("Elige una opción (1-3): ");
echo "\n";

if ($opcion >= 1 && $opcion <= 3) {
    $lado = (float)readline("Ingresa la longitud del lado: ");
    echo "\n";

    switch ($opcion) {
        case 1:
            $resultado = calcularTrianguloEquilatero($lado);
            echo "Triángulo equilátero seleccionado.\n";
            break;
        case 2:
            $resultado = calcularCuadrado($lado);
            echo "Cuadrado seleccionado.\n";
            break;
        case 3:
            $resultado = calcularPentagono($lado);
            echo "Pentágono seleccionado.\n";
            break;
    }

    echo "Perímetro: " . $resultado['perimetro'] . "\n";
    echo "Área: " . $resultado['area'] . "\n";
} else {
    echo "Opción no válida. Por favor, elige una opción entre 1 y 3.\n";
}


?>