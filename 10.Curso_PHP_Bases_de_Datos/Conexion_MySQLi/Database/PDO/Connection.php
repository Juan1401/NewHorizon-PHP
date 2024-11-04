<?php

namespace Database\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }

    private static function getInsances(){
        if(!self::$instance instanceof self)
        {
            self::$instance = new self();
        }
    }
    
    public function get_database_instance(){
        return $this->connection;
    }

    function make_connection(){
        $server = "phpmyadmin.test"; //Virtual Host asigando para php my admin.
        $database = "finanzas_personales";
        $username = "juaquihu";
        $password = "Naranja-1401";

        $connection = new \PDO("mysql:dbname=$database;host=$server", $username, $password);

        $setnames = $connection->prepare("SET NAMES 'utf8'");
        $setnames->execute();

       $this->connection = $connection;
    }
}