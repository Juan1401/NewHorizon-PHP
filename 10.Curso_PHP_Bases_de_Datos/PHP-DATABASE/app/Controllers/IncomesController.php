<?php

namespace App\Controllers;

use Database\PDO\Connection;

    class IncomesController {

        private $connection;

        public function __construct() {
            $this->connection = Connection::getInstance()->get_database_instance();
        }

        /**
         * Muestra una lista de este recurso
         */
        public function index() {

            $stmt = $this->connection->prepare("SELECT * FROM incomes");
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                echo "Ganaste " . $row["amount"] . "USD en: " . $row["description"] . "\n";
             }

        }
    
        /**
         * Muestra un formulario para crear un nuevo recurso
         */
        public function create() {}
    
        /**
         * Guarda un nuevo recurso en la base de datos
         * Este método usa la conexión MySQLi para hacer que funcióne cambiar el método.
         */
        public function store($data) {

            //Refactorización de Código a PDO
            $stmt = $this->connection->prepare("INSERT INTO incomes(payment_method, type, date, 
            amount, description) VALUES (:payment_method, :type, :date, 
            :amount, :description)");

            $stmt->bindParam(":payment_method", $data['payment_method']);            
            $stmt->bindParam(":type", $data['type']);          
            $stmt->bindParam(":date", $data['date']);
            $stmt->bindParam(":amount", $data['amount']);           
            $stmt->bindParam(":description", $data['description']);

            $stmt->execute();


            /**Forma 1 -> bindParam de MySQLi */
            /*$connection = Connection::getInstance()->get_database_instance();

            $stmt =  $connection->prepare("INSERT INTO incomes(payment_method, type, date, 
            amount, description) VALUES (?,?,?,?,?);");

            $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, 
            $description);

            $payment_method = $data['payment_method'];
            $type = $data['type'];
            $date = $data['date'];
            $amount = $data['amount'];
            $description = $data['description'];

            $stmt->execute();

            echo "Se han insertado {$stmt->affected_rows} filas en la base de datos";

            */
        }
    
        /**
         * Muestra un único recurso especificado
         */
        public function show() {}
    
        /**
         * Muestra el formulario para editar un recurso
         */
        public function edit() {}
    
        /**
         * Actualiza un recurso específico en la base de datos
         */
        public function update() {}
    
        /**
         * Elimina un recurso específico de la base de datos
         */
        public function destroy() {}
        
    }
    
    /*
    
    index - Display a listing of the resource.
    create - Show the form for creating a new resource.
    store - Store a newly created resource in storage.
    show - Display the specified resource.
    edit - Show the form for editing the specified resource.
    update - Update the specified resource in storage.
    destroy - Remove the specified resource from storage.
    
*/