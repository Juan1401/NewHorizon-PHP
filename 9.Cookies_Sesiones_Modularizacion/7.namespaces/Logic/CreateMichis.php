<?php

require("classes/MichisDisponibles/Michi.php");
require("classes/MichisAdoptados/Michi.php");

use MichisDisponibles\Michi;

//Se renombra la clase por medio de un AS
use MichiAdoptados\Michi as MichisAdoptados;

$mrMichi = new Michi("Mr. Michi", "Blanco" , 18);
$michisancio = new Michi("Michisancio", "Naranja" , 16);
$michales = new Michi("Michales", "Negrito" , 15);



$mrMichi_adopted = new MichisAdoptados("Mr. Michi", new DateTime("2022-04-11") , "Juancito");
$michisancio_adopted = new MichisAdoptados("Michisancio", new DateTime("2022-01-15") , "Miguelito");
$michales_adopted = new MichisAdoptados("Michales", new DateTime("2021-06-14") , "Pedruco");


