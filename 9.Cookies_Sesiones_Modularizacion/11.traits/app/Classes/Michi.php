<?php

namespace app\Classes;

use App\Traits\Pet;

class Michi 
{
    use Pet;

    public function sayMeow(){
        return "Meow 😼";
    }

    public function scratch(){
        return "Rrww";
    }
    
}
