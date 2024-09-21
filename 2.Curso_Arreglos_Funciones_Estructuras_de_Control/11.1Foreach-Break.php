<?php 

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);


foreach($tiendita_de_cafe as $cafe => $precio )
{
    //OMITE EL RECALENTADO.
    if ( $cafe == "Recalentado" )
    {
        continue; //Salta al siguiente ciclo 
    }
    echo("El cafe es muy rico $cafe \n");


    // if($cafe == "Latte")
    // {
    //     echo("!Encontre a Latte");
    //     break; // para el CICLO.  //para cuando encuentre el cage LATTE
    // }



}
echo "\n";


?>