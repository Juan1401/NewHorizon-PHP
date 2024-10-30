<?php

try {
    $pet = strtolower(readline("¿Qué quieres adoptar? "));

    if($pet != "michi" && $pet != "conejo" ){

        //Excepción puesta manualmente.
        throw new Exception("Lo sentimos, no tenermos $pet en este centro de adopción" ,  1);
        
        echo "Felicidades por tu nuevo $pet!";
    }

} catch (\Throwable $th) {
   
    echo $th->getMessage();
}