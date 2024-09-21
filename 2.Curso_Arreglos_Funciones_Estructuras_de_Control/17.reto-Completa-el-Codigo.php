<?php

function obtener_hora(){
    //return date(DATE_RFC2822); // FORMATO PREDEFINO
    return strtoupper(date("h:i a"));  //segun la documentación se coloca la h para un formato de 12 horas : dos puntos como separador i para minutos de 0 59 espacio como separador para colocar a para decir si es AM o PM

}
//debido a que me devolvia una zona horaria equivocada le especifique la zona horaria y le devolvi con un date.
function obtener_hora_local(){

    date_default_timezone_set('America/Bogota'); //define una zona horaria.
    return strtoupper(date("h:i a"));
}

echo "¡Hola! ¿Podrias decirme que horas es? \n";
echo "¡Claro! son las: " . obtener_hora_local();

echo "\n";


?>