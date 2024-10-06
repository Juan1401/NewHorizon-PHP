<?php 

class User 
{
    public $type;

}

class Admin
{
    public function greet()
    {
        return "Hola Administrador";
    }

}

//La variable $user es ahora objeto de la clase User
$user = new User;

//Le definimos que la propiedad type es de tipo Admin.
$user->type = new Admin;

//Mostramos la función de la propiedad type.
echo $user->type->greet();