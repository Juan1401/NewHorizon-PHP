<?php

//contratos
interface PersonInterface
{
    public function getName();

}

class AdminInterface implements PersonInterface
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new AdminInterface('Admin');
echo $admin->getName();