<?php
/*
1. Convertir un input de una hora que viene en AM/PM a hora en formato militar

*/
//FORMA SIMPLE CON FUNCIÓN PREDEFINIDA.
echo "CONVERSIÓN POR FUNCIÓN PREDEFINIDA \n\n";
$input = "7:00:45 PM";
echo $input;
echo "\n";
$output = date("H:i:s", strtotime($input));

echo $output;
echo "\n";
echo "\n";



//2. FORMA ESTRUCTURADA.
echo "CONVERSIÓN DE FORMA ESTRUCTURADA \n\n";

$hora = "01:45:54 PM";

function get_ConvertirhoraMilitar($hora){

    //le quito espacios a hora
    $input = explode(" ",$hora);
    // print_r ($input);
    $time = explode(":", $input[0]);

    if ( $input[1] == "PM" AND $time[0] <12 ){
        $time[0] = $time[0] +12; 
    }
    if ( $input[1] == "AM" AND $time == 12 ){
        $time[1] = "00";
    }

    return implode(":",$time);
}

echo "La hora en formato 12 es igual a: ". $hora . " y en formato 24hr es: ". get_ConvertirhoraMilitar($hora);
echo "\n";

?>