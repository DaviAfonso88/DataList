<?php namespace App\Models;

use CodeIgniter\Model;


class Modelo extends Model {

    protected $table = 'cliente';
    protected $primaryKey = 'idCliente';
    protected $returnType = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['nome', 'email'];



    public function buscarCliente($idCliente){

        $cliente = $this->find($idCliente);
        return $cliente;



    }
        
    




    


    }





























?>