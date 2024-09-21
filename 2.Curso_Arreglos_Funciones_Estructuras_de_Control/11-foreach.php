<?php 

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

//VARIABLE A ITERAR as VALOR QUE VOY A OBTENER DE ESA ITERACION
foreach($tiendita_de_cafe as $price  )
{
    echo "El cafe en cuestión cuesta $$price USD \n";
    echo "\n"; 
}
echo "\n"; 

// FOREACH ARREGLADO PARA OBTENER LOS SUBINDICES
foreach($tiendita_de_cafe as $cafe => $price  )
{
    echo "El cafe en $cafe cuesta $$price USD \n";
    echo "\n"; 
}


?>