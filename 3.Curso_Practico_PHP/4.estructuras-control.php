<?php

echo "IF\n\n\n";
$valorA = 5;

if($valorA == 10) {
    echo "Es igual a 10";
} else {
    echo "No es igual a 10";
}

echo "WHILE/DOWHILE\n\n\n";
$i = 0;
do {
    echo $i++;
} while ($i <= 10);

echo "FOR/FOREACH\n\n\n";
$arr = array(1,2,3,4);
foreach($arr as $value) {
    echo $value;
}
echo "SWICTH\n\n\n";
$valorA = 3;

switch($valorA) {
    case 1:
        echo "El valor es 1";
    break;
    case 2:
        echo "El valor es 2";
    break;
    case 3:
        echo "El valor es 3";
    break;
    default:
        echo "No es ninguno de los valores 1, 2 o 3";
    break;
}

echo "ARREGLO\n\n\n";


?>