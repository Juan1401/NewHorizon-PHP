<?php
include 'Base.php';
include 'Guest.php';
include 'Admin.php';
include 'User.php';



$guest = new Guest();
echo $guest->login();

$admin = new Admin('Helena');
echo $admin->login();

$user = new User('John Moore');
echo $user->login();