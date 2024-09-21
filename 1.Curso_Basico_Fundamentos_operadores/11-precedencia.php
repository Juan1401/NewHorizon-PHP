<?php

//PRECEDENCIA NO ES MAS QUE DECIDIR QUE COSA VA PRIMERO Y QUE COSA VA DESPUES

$michis_4_patas = true;
$michis_programan_con_PHP = false;

//$resultado = $michis_4_patas and $michis_programan_con_PHP; //Esto da true debido a que el sultado se asigna primero el valor de michis_4_patas

//La solución es la siguiente.
$resultado = ($michis_4_patas and $michis_programan_con_PHP);

var_dump( $resultado ); # Imprimimos en pantalla el valor de la variable $resultado

echo “\n”; # Salto de línea

# Mensaje en consola:
# bool(false)

?>