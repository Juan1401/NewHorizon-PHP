<?php

// && AND

$es_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

$michis_4_patas = true;
$michis_programan_con_PHP = false;

var_dump( $es_michi_grande && $sabe_volar );
echo ("\n");

// || OR

var_dump( $es_michi_grande || $sabe_volar );
echo ("\n");

// ! NEGACION

var_dump(!$sabe_volar);
echo ("\n");


//EXPERIMIMENTO 

//porque true?? si deberia ser false por la tabla de verdad?

//Es por la diferencia entre usar && y and - si se cambia el operador logico se puede ver la diferencia.

$resultado = $michis_4_patas && $michis_programan_con_PHP;
var_dump($resultado);
echo("\n");

?>