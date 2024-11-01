<?php

/**
 * !PROGRAMACIÓN ESTRUCTURADA (CON FUNCIONES)
 */
// Sumarle a la fecha actual 5 días

// Intervalo de días que le quiero añadir
$intervalo = date_interval_create_from_date_string("5 days");

// Obtener la fecha actual
$date = date_create();

// Función que le añade el tiempo a la fecha actual con base al intervalo dado.
date_add($date, $intervalo);

// Mostrar la fecha en el formato requerido
echo date_format($date, "Y-m-d");


/**
 * !PROGRAMACIÓN ORIENTADA A OBJETOS
 */
// Sumarle a la fecha actual 5 días

$intervalo = DateInterval::createFromDateString("5 days");
$date = new DateTime();
$date->add($intervalo);
echo $date->format("Y-m-d");