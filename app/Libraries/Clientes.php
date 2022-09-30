<?php namespace App\Libraries;


Class Clientes{

    public function todosClientes(){

        $db = db_connect();

        $resultados = $db->table('cliente')->get()->getResultObject();

        $db->close();

        return $resultados;

    }




}


