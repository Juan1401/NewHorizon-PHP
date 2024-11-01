<?php

//Establecer la zona horario

//Establecer la zona horaria
date_default_timezone_set("America/Bogota");
echo "\n";
echo date_default_timezone_get(); //Obtener la zona horaria establecida.
echo "\n";

//Obtener la fecha actual
 $now = date("Y-m-d H:i:s");


/*strtotime -> Parse about any English textual datetime description into a Unix timestamp */
echo strtotime($now);
echo "\n";
//echo strtotime("17 april 2020");
// echo "\n";
// //echo strtotime("+1 day");
// echo "\n";
// //echo strtotime("next Monday");
// echo "\n";
// //echo strtotime("last Wednesday");
// echo "\n";

$unix_time_last_wednesday = strtotime("last Wednesday");
echo "\n";
echo date("Y-m-d H:i:s", $unix_time_last_wednesday); 
echo "\n\n";

/*Fechas inmutables */
//$date_inmutable = new DateTimeImmutable();



//Calcular diferencias de tiempo.
//Saber el intervalo de tiempo de nacmiento de MrMichi.

echo "Saber los años de mr Michi: \n";
$today = new Datetime();
$mrmichi_birth = new DateTime("2020-10-30");
$interval = $mrmichi_birth->diff($today);

echo $interval->format("%y años con %d dias");
echo "\n\n";

// Crear desde un formato dado
// Pasar una fecha en formato de texto a un formato de fecha dado.
echo "Creando una fecha con base a un formato dado:\n";
$date = DateTime::createFromFormat("l j F Y","Sunday 17 April 2022");

//Formateo a mi formato de preferencia.
echo $date->format("Y-m-d H:i:s");
echo "\n\n";
  
//Modificar una fecha 
echo "Modificando una fecha con la función modify: \n";
$date = new DateTime(); //Fecha de Hoy
$date->modify("+1day + 2months"); // Se le añadieron 1 dia mas 2 meses a la fecha actual.
echo $date->format("Y-m-d"); //Resultado.

?>    