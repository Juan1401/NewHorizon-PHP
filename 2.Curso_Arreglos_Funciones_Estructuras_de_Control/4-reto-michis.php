<?php

//un arreglo 3 michis y que cada uno tengo nombre, ocupacion, color y comida y que las comidad favoritas y que no les gustan

//MI CODIGO.
$michis = array(
    "michi1" => array(
        "NOMBRE" => "Pelusa",
        "OCUPACION" => "Dormir",
        "COLOR" => "Blanco",
        "COMIDA" => array (
            "FAVORITA" => "Muiscas",
            "NOFAVORITA" => "CHICLE"
        )
        ),
    "michi2" => array(
        "NOMBRE" => "Zafiro",
        "OCUPACION" => "Cazar",
        "COLOR" => "Gris",
        "COMIDA" => array (
            "FAVORITA" => "Guacharaca",
            "NOFAVORITA" => "PandeBono"
            )
        ),
    "michi3" => array(
        "NOMBRE" => "Negrito",
        "OCUPACION" => "Comer",
        "COLOR" => "Negro",
        "COMIDA" => array (
            "FAVORITA" => "Muiscas",
            "NOFAVORITA" => "Verduras"
            )
        ),
        );
// var_dump($michis);
// echo("\n");

//CODIGO DEL TEACHER
//El profesor dijo que no era necesario colocar un arreglo con un nombre respectivo
//esto porque si solo creamos el arreglo es mas que suficiente ya que php interpreta 
//que el primer arreglo es el subindice 1.


$escuela = array(
    array(
        "NOMBRE" => "Pelusa",
        "OCUPACION" => "Dormir",
        "COLOR" => "Blanco",
        "COMIDA" => array (
            "FAVORITA" => "Muiscas, PAN",
            "NOFAVORITA" => "CHICLE"
        )
        ),
    array(
        "NOMBRE" => "Zafiro",
        "OCUPACION" => "Cazar",
        "COLOR" => "Gris",
        "COMIDA" => array (
            "FAVORITA" => "Guacharaca",
            "NOFAVORITA" => "PandeBono"
            )
        ),
    array(
        "NOMBRE" => "Negrito",
        "OCUPACION" => "Comer",
        "COLOR" => "Negro",
        "COMIDA" => array (
            "FAVORITA" => "Muiscas, POLLO",
            "NOFAVORITA" => "Verduras"
            )
        ),
        );
// var_dump($escuela);
// echo("\n");

//TEST para contar el número de michis de la escuela
$contar_escuela = count($escuela);
echo($contar_escuela);
echo("\n");


//TEST para ver si se podia contar los arreglos de una arreglo.
$contar_comida = count($escuela[0]["COMIDA"]);
echo($contar_comida);
echo("\n");


//TEST las comidas favoritas de pelusa
echo (" Las comidas favoritas de Pelusa son: " .$escuela[0]["COMIDA"]["FAVORITA"]);
echo("\n");



?>