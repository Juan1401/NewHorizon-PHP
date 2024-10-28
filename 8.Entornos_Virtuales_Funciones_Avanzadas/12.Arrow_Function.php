<?php
// Lee variables del ámbito global
$cajero = 10;
$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20) . PHP_EOL;  // 30



// No se puede modificar un variable del ámbito global desde una arrow function
$cajero2 = 10;
$add_cajero2 = fn($add) => $cajero += $add; 
$add_cajero2(5);
$add_cajero2(5);
$add_cajero2(6);

echo $cajero2 . PHP_EOL;  // 10 



// Otro ejemplo
$edades = [5, 21, 50, 9 ,18]; 
$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);

echo implode(" ", $mayores_de_edad) . PHP_EOL;  // 21 50 18



// Yes
$where_am_i = "México";
$change_where_am_i = fn(&$where_am_i) => $where_am_i = "Colombia";
$change_where_am_i($where_am_i);

echo $where_am_i . PHP_EOL;   // Colombia