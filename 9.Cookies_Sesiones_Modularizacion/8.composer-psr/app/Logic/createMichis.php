<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichi(){

    $mr_michi = new Michi("Mr. Michi", "Blanquito", "18");
    $mr_michi_adopted = new MichisAdoptados("Mr. Michi", new DateTime("2024-11-01"), "Juanjito");

    echo $mr_michi->sayMeow(). " Me adoptó {$mr_michi_adopted->getAdopted_by()}";
}