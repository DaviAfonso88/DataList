<?php namespace App\Libraries;


class componentes{

    public function cliente($cliente){

        $data = [
           'nome' => $cliente['nome'],
           'email' => $cliente['email'],
        ];


        return view('cliente', $data);


    }
}