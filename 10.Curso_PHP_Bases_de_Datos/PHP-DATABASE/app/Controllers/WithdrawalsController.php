<?php

namespace App\Controllers;

use Database\PDO\Connection;

    class WithdrawalsController {

        /**
         * Muestra una lista de este recurso
         */
        public function index() {}
    
        /**
         * Muestra un formulario para crear un nuevo recurso
         */
        public function create() {}
    
        /**
         * Guarda un nuevo recurso en la base de datos
         */
        public function store($data) {
            // Conexión a la base de datos preparada.
            $connection = Connection::getInstance()->get_database_instance();

          $stmt = $connection->exec("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (
            {$data['payment_method']},
            {$data['type']},
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
            )");

        echo "Se han insertado $stmt filas en la base de datos.";


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