<?php

class User
{
    // public -  Puede ser accedido por todos, o seá por cualquier elemento o clase.
    // protected - Podrá ser accedido a nivel de la clases, paquetes y Subclases (las clases hijas ← clases padres).
    // private - Solo puede ser accedido a nivel de clases, esto quiere decir, que solo puedes ser modificado a nivel de la clase, o sea, por ella misma.
    //default - Este nos permite el acceso a nivel de clases y paquetes. O sea, que a nivel de herencia no puede ser accedido.
    public const PAGINATE = 25;

    public $username;
    //protected $username;
    //private $username;

    public function getUsername()
    {
        // .. 

    }

    protected function getUsername3()
    {
        // .. 

    }

    private function getUsername2()
    {
        // .. 

    }

   
}