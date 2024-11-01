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

/*Fechas inmutables */
//$date_inmutable = new DateTimeImmutable();



//Calcular diferencias de tiempo.

  


?>