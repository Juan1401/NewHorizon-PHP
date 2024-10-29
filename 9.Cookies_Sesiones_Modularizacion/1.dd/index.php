<?php

require("vendor/autoload.php");

class Michi{

    protected $patas = [];
    protected $color = [];

    // Yo puedo recibir ciertos atributos.
    function __construct(string $color) {

        $this->color = $color;

        for ($i=0; $i < 4 ; $i++) { 
            $this->patas[$i] = new PatasDeMichi();
        }
    }
}

class PatasDeMichi {

    protected $nails = 4;
    protected $description = "Tiene Manchitas";

    public function get_description() : string{
        return $this->description;

    }
}

$casa_de_michis = array(
    "nombre" => "Michilango",
    "Ubicación" => [
        "pais" => "México",
        "ciudad" => "Ciudad de México",
        "colonia" => "Doctores",
        "numero" => 27
    ],
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("Blanco"),
        new Michi("Negro"),
        new Michi("Gris"),
    ]
);

//debuggear con print_r
// echo "<pre>";
// print_r($casa_de_michis);
// echo "</pre>";

//Debuggear con Symfony/Laravel
dd($casa_de_michis);
