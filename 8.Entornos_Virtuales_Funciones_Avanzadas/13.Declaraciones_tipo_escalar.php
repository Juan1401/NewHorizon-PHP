<?php

function calcular_area_triangulo(int $base, int $altura, string $nombre)
{
    return "!Hola $nombre, el área de tu triangulo es " . ($base * $altura) / 2 . "!";
}
//Prueba de Obligatoriedad.
// echo calcular_area_triangulo("Soy rebelde", "20", "JJQH");
echo calcular_area_triangulo("10", "20", "JJQH");
echo "\n";