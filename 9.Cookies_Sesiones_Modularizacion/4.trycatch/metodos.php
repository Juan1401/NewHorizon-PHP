<?php

/**Explicación del Trace */
function caminito()
{
    return 20 / 0;
}
function division()
{
    return caminito();
}



try {

    $resultado = division();
    echo $resultado;
} catch (\Throwable $th) {
    //Obtener mensaje de error.
    echo $th->getMessage();
    echo "<br>";

    //Obtener Codigo de error.
    echo $th->getCode();
    echo "<br>";

    //Obtener el archivo en el que ocurre el error.
    echo $th->getFile();
    echo "<br>";

    //Linea en la cual se presenta el error.
    echo $th->getLine();
    echo "<br>";

    //Devuelve un array -> Errores que ocurren por fuera de la del segmento try catch como por ejemplo la función.
    //Duelve la ruta en donde ocurrio el error.
    print_r($th->getTrace());
    echo "<br>";



    
}
