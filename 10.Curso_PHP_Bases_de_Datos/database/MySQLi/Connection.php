<?php

namespace Database\MySQLi;

class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }
    public static function getInstance(){

        if(!self::$instance instanceof self)
            self::$instance = new self();
        
        return self::$instance;
    }

    public function get_database_instance(){
        return $this->connection;
    }

    private function getConfiguration(){
        $server = "phpmyadmin.test";
        $database = "finanzas_personales";
        $username = "juaquihu";
        $password = "Naranja-1401";
        
        $mysqli = new \mysqli($server,$username,$password,$database);

        return $mysqli;
    }

    private function make_connection(){

       $configuration = $this->getConfiguration();

        //Comprobración de error.
        if(!$configuration)
            die("Falló la conexión: {$configuration->connect_error}");
        
        //Esto nos ayuda a poder usar cualquier carater en nuestras consultas.
        $setnames = $configuration->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        
        $this->connection = $configuration;
    }
}