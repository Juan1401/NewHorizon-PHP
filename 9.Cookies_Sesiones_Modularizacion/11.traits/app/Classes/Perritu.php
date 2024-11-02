<?php

namespace app\Classes;

use App\Traits\Pet;

class Perritu 
{
    use Pet;

    public function bark(){
        return "Woof! 🐶";
    }

    public function drool(){
        return "🐶";
    }   
}