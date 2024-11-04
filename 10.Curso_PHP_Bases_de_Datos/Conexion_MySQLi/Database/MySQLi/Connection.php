<?php

namespace Database\MySQLi;

class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }
    public static function getInstance(){

        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get_database_instance(){
        return $this->connection;
    }

    private function make_connection(){
        $server = "phpmyadmin.test";
        $database = "finanzas_personales";
        $username = "juaquihu";
        $password = "Naranja-1401";
        
        $mysqli = new \mysqli($server,$username,$password,$database);
        
        //Comprobración de error.
        if($mysqli->connect_errno)
            die("Falló la conexión: {$mysqli->connect_error}");
        
        //Esto nos ayuda a poder usar cualquier carater en nuestras consultas.
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        
        $this->connection = $mysqli;
    }
}