<?php

$valueA = true;
$valueB = true;

$result1 = $valueA and $valueB;
// $result1 = $valueA && $valueB;
var_dump($result1);

$result2 = $valueA or $valueB;
// $result2 = $valueA || $valueB;
var_dump($result2);

$result3 = !$valueA;
var_dump($result3);

$valueC = 5;
$valueD = 2;

$sum = $valueC + $valueD;
var_dump($sum);

$subtract = $valueC - $valueD;
var_dump($subtract);

$multiply = $valueC * $valueD;
var_dump($multiply);

$division = $valueC / $valueD;
var_dump($division);

$module = $valueC % $valueD;
var_dump($module);

$potentiation = $valueC ** $valueD;
var_dump($potentiation);

?>


?>