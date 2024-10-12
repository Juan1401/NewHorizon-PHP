<?php

abstract class Base {
    protected $name;

    private function getClassName() {
        return get_called_class();
    }

    public function login() {
        return "<p>Mi nombre es $this->name desde la clase {$this->getClassName()} <br><p>";
    }
}

