<?php
include 'Guest.php';
include 'Admin.php';
include 'User.php';

abstract class Base {
    protected $name;

    private function getClassName() {
        return get_called_class();
    }

    public function login() {
        return "<p>Mi nombre es $this->name desde la clase {$this->getClassName()} <br><p>";
    }
}



$guest = new Guest();
echo $guest->login();

$admin = new Admin('Helena');
echo $admin->login();

$user = new User('John Moore');
echo $user->login();