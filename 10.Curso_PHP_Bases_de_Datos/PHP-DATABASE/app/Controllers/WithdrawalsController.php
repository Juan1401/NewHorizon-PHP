<?php

namespace App\Controllers;

use Database\PDO\Connection;

    class WithdrawalsController {

        private $connection;

        public function __construct() {
            $this->connection = Connection::getInstance()->get_database_instance();
        }

        /**
         * Muestra una lista de este recurso
         */
        public function index() {
        /** Primera forma de realizar consulta con FETCH */
            // $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
            // $stmt->execute();

            // $results = $stmt->fetchAll();

            // foreach ($results as $result) {
            //    echo "Gastaste ". $result["amount"] . " USD en: ". $result["description"] . "\n";
            // }
        
        /**Segunda Forma 
         * Esta traera la columna numero 0 del arrego el cual es amount.
         * Fetch column solo me da un columna y los pone dentro de la variable.
         * */  
            $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
            $stmt->execute();
            
            $results = $stmt->fetchAll(\PDO::FETCH_COLUMN,0);

            foreach ($results as $result) {
                echo "Gastaste $result USD \n";
            }

        /** Tercera Forma 
         * Esta forma sirve para de que manera estetica le mandemos una variable no debida por medio del parametro bindColumn
        */

        // $stmt = $this->connection->prepare("SELECT * FROM incomes");
        // $stmt->execute();

        // $stmt->bindColumn("amount", $amount);
        // $stmt->bindColumn("description", $description);

        // while($stmt->fetch())
        //     echo "Ganaste $amount USD en: $description \n";

        }
    
        /**
         * Muestra un formulario para crear un nuevo recurso
         */
        public function create() {}
    
        /**
         * Guarda un nuevo recurso en la base de datos
         */
        public function store($data) {

            $stmt = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, 
            :amount, :description)");

            $stmt->bindValue(":payment_method", $data['payment_method']);
            $stmt->bindValue(":type", $data['type']);
            $stmt->bindValue(":date", $data['date']);
            $stmt->bindValue(":amount", $data['amount']);
            $stmt->bindValue(":description", $data['description']);

            $data['description'] = "Quiero que este este al pedo.";
            $stmt->execute();

        }

        /**
         * Muestra un único recurso especificado
         */
        public function show($id) {

            $stmt= $this->connection->prepare("SELECT * FROM withdrawals WHERE id=:id");
            $stmt->execute([
                ":id" => $id
            ]);

            /**Para que no me devuelva todos los indices asocitivos al consultarlo con el vardump */
            // $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

            echo "El registro con id $id dice que te gastaste {$result['amount']} 
            USD en {$result['description']}";

            var_dump($result);
        }
    
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
        public function destroy($id) {

         $this->connection->beginTransaction();

         $stmt = $this->connection->prepare(" DELETE FROM withdrawals WHERE id = :id ");

         $stmt->execute([
            ":id" => $id
         ]);

         $sure = strtolower(readline("¿De verdad quieres eliminar este registro? "));

         if ($sure == 'no') {
             //Devuelve los cambios
             $this->connection->rollback();
         } else {
             //Ejecuta La sentencia SQL.
             $this->connection->commit();
         }
         
        }
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