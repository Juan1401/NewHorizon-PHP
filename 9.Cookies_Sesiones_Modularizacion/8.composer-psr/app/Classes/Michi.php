<?php

namespace app\Classes;

class Michi {
    protected $name;
    protected $color;
    protected $age;

    public function __construct( $name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    
    /**
     * Get the value of name
     */ 
    public function getName(){
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(){
        return $this->color;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(){
        return $this->age;
    }

    public function sayMeow(){
        return "Meow!";
    }

}