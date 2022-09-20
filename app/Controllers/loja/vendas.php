<?php namespace app\controllers\loja;


use CodeIgniter\controller;

class vendas extends controller
{
    
    public function index(){
        echo 'Vendas!' ;
    }
    
    public function venda($valor=100){
        echo $valor;

    }

     


}