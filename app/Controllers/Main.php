<?php

namespace App\Controllers;

use CodeIgniter\HTTP\request;
use CodeIgniter\controller;
use App\Libraries\loja\venda;
use App\Libraries\Clientes;
use App\Models\Modelo;



class Main extends Controller{

protected  $helpers = array('date', 'matematica');

public function index1(){
    
    echo now();
    echo "<br>";
    echo adicionar(30,40);
    echo "<br>";
    echo subtracao(70,60);
    echo "<br>";
    echo multiplicacao(10,2);
    echo "<br>";
    echo divisao(40,2);

}

public function index2(){
    echo "main controller";

    $v = new venda();
    $v->produto = "CARRO";
    $v->preco = 100000;

    echo"<br>";
    echo $v->produto;
    echo "<br>";
    echo $v->preco;

    echo "<br>";
    echo $v->info();

}


public function index3(){

    $variaveis = [
        'nome' => 'ADAUBERTO',
        'habilidade' => 'OPRESSOR'
    ];

    echo view('loja/pagina',$variaveis);
}


public function index4(){
    $marcas = [
        'audi',
        'mercedes',
        'ferrari',
        'fuscao preto'
    ];
    echo view('loja/p1', ['marcas' => $marcas]);
}


public function index5(){

    $cliente = [
        [ 
            'nome' => 'Vitoria',
            'email' => 'Vitoria@gmail.com'
        ],

        [ 
            'nome' => 'Davi',
            'email' => 'Davi@gmail.com'
        ],

        [ 
            'nome' => 'Irineu',
            'email' => 'irineu@gmail.com'
        ],

        [ 
            'nome' => 'Daniel',
            'email' => 'daniel@gmail.com'
        ],
    ];

    echo view('loja/p2', ['clientes' => $cliente]);
}


public function index6(){
    echo view('layouts/pagina2');




}


public function index7(){
    echo view('layouts/inc');




}

public function index7_1(){

  echo view('retorno');


}

public function index8(){
       
    $dados=[
      'nome' => 'Davi',
     'apelido' => 'Afonso'
   ];
    
    //echo view('pagina3', $dados);

     
$r = \config\services::renderer();
//$r->setvar('nome', 'davi afonso')
//->setvar('apelido', 'afonsin');
echo $r->setdata($dados)->render('pagina3');


}


public function index9(){

    $p = \config\services::parser();
    $p->setdata([
        'frase' => 'Esta frase é do parser.',
        'titulo' => 'PARSER'
    ]);

    echo $p->render('pagina4');


    //echo view('pagina4');



}



public function index10(){

    $p = \config\services::parser();
    $p->setdata([
        'titulo' => 'TESTES COM VIEW PARSER',
        'nomes' => [
         ['nome' => 'davi'],
         ['nome' => 'vitoria'],
         ['nome' => 'daniel'],
        ],
        'admin' => false,
        'literal' => 'FEITO POR MIM'
       

    ]);

    echo $p->render('pagina5');

}


public function index11(){

$tabela = new \CodeIgniter\View\Table();

$template = [
    'table_open' => '<table class="table table-striped">',

    'thead_open'  => '<thead class="thead-dark">',
    'thead_close' => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end'   => '</th>',

    'tfoot_open'  => '<tfoot>',
    'tfoot_close' => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'  => '<tbody>',
    'tbody_close' => '</tbody>',

    'row_start'  => '<tr>',
    'row_end'    => '</tr>',
    'cell_start' => '<td>',
    'cell_end'   => '</td>',

    'row_alt_start'  => '<tr>',
    'row_alt_end'    => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end'   => '</td>',

    'table_close' => '</table>',

];

$tabela->setTemplate($template);

$data = [
    ['Name', 'Color', 'Size'],
    ['Fred', 'Blue',  'Small'],
    ['Mary', 'Red',   'Large'],
    ['John', 'Green', 'Medium'],
];

 $t = $tabela->generate($data);

echo view('pagina6', ['tabela' => $t]);

}


public function index12(){
echo view('pagina7');
# HELLO WORLD


}


public function index12_1(){
    echo view('home');


}


public function index12_2(){

$a =  true;

if($a){
    return redirect()->to(site_url("public/main/index7_1"));

}

echo view('servicos');

}


public function index12_3(){
    echo 'o fluxo foi redirecionado';
}



public function index13(){

  session()->set('habilidade', 'fogo');

  echo '<pre>';
  print_r(session()->get());



//$ses = \Config\Services::session();

//$ses->set('usuario', 'joao');

//echo '<pre>';
//print_r($_SESSION);

}

public function index13a(){

    echo 'usuario: ' . session()->usuario . '<br>';
    echo 'habilidade: ' . session()->habilidade;

//$ses = \Config\Services::session();

//echo $ses->get('usuario');


}


public function index14(){

    session()->set('cavaleiro', 'prateado');

    echo session()->get('nome') . '<br>';
    echo session()->nome;
    
    if(session()->has('cargo')){
        echo ' (sim)';
    } else {
            echo 'não';
        }


    $dados = [
        'nome' => 'davi',
        'cargo' => 'dev',

    ];

    session()->set($dados);

    $this->printsession();
}

    // ========================================

    public function login(){
    
    

        session()->set([
            'usuario' => 'ana',
            'email' => 'ana@gmail.com'
        ]);

        echo 'login';
        $this->printsession();
    }

    // ========================================

    public function usuario(){
        if(session()->has('usuario')){
        echo 'Existe usuário logado';}
        else{ echo 'Não existe usuário logado.';}
        
    

    }

     // ========================================

     public function logout(){

        session()->destroy();
        return redirect()->to(site_url('public/main/index7'));


     }


     private function printsession(){

     echo '<pre>';
     print_r(session()->get());

    }



public function testebd(){

    $db = \Config\Database::connect();
    $dados = $db->query("SELECT * FROM cliente")->getResultArray();
    $db->close();

   foreach($dados as $row){
    echo '<p>' . $row['Email']. '</p>';
   }

}

public function database(){

    return view('formulario');

  
}


public function novocliente(){

    $nome = $this->request->getPost('nome');
    $email = $this->request->getPost('email');
    $profissao = $this->request->getPost('profissao');

    $params = [
        'nome' => $nome,
        'email' => $email,
        'profissao' => $profissao
    ];

    $db = db_connect();
    $db->query("
    INSERT INTO cliente VALUES(
        0,
        :nome:,
        :email:,
        :profissao:)
    ", $params);
    $db->close();

   echo 'terminado';

}


public function novocliente1(){
    echo 'novo cliente';
}





/*=============================================================================================================================================================================================
===============================================================================================================================================================================================
===============================================================================================================================================================================================
===============================================================================================================================================================================================
===============================================================================================================================================================================================
===============================================================================================================================================================================================
===============================================================================================================================================================================================
*/

// PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO //  // PROJETO // 





/*public function projeto(){

    
    $data['dados'] = $this->projeto_getalldados();
    return view('home_projeto', $data);

}


public function new_dados(){

    return view('new_dados');
    


}


public function newdadossubmition(){

    if(!$_SERVER['REQUEST_METHOD'] == 'POST'){
        return redirect()->to(site_url('public/main/projeto'));


    }

    

    $params = [
        'dados' => $this->request->getPost('data_name')
    ];

    $db = db_connect();
    $db->query(" INSERT INTO dados(job, datetime_created)
      VALUES(:dados:, NOW())
    ", $params);
    $db->close();

    return redirect()->to(site_url('public/main/projeto'));






}




private function projeto_getalldados(){
    $db = db_connect();
    $dados = $db->query("SELECT * FROM dados")->getResultObject();
    $db->close();

    return $dados;


}


public function dadosdone($id_job = 1){

    $params =[
        'id_job' => $id_job
    ];

    $db = db_connect();
    $db-> query("
    UPDATE dados
    SET datetime_finished = NOW(),
    datetime_updated = NOW()
    WHERE id_job = :id_job:
    ",$params);
    $db->close();

    return redirect()->to(site_url('public/main/projeto'));





}


public function editdados($id_job = 1){

    $params = [
        'id_job' => $id_job

    ];
    $db = db_connect();
    $dados = $db->query("
    SELECT * FROM dados WHERE id_job = :id_job:
    ",$params)->getResultObject();
    $db->close();
    

    $data['job'] = $dados[0];
    return view('edit_dados', $data); 



}





public function editdadossubmition(){
    $params = [
        'id_job' => $this->request->getPost('id_job'),
        'job' => $this->request->getPost('job_name'),

    ];

    $db = db_connect();
    $db->query("
    UPDATE dados
    SET job = :job:,
    datetime_updated = NOW()
    WHERE id_job = :id_job:
    ", $params);
    $db->close();

    return redirect()->to(site_url('public/main/projeto'));


}




public function deletedados($id_job = 1){

    $params = [
        'id_job' => $id_job
    ];

    $db = db_connect();
    $data['job'] = $db->query("
       SELECT * FROM dados WHERE id_job = :id_job:
    
    ", $params)->getResultObject()[0];
    $db->close();


    return view('delete_dados', $data);


}



public function deletedadosconfirm($id_job){

    // delete da tarefa na bd 

    $params = [
        'id_job' => $id_job
    ];

    $db = db_connect();
    $db->query("DELETE FROM dados WHERE id_job = :id_job:", $params);
    $db->close();



    // atualização da página incial

    return redirect()->to(site_url('public/main/projeto'));





}
*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





public function index15(){
    {
            $data = [];
            if (session()->has('erro')) {
                $data['erro'] = session('erro');
            }
            return view('pagina8', $data);
        }

}
public function submeter()
    {
        if ($this->request->getMethod() != 'post') {
            return redirect()->to(site_url('public/main/index15'));
        }



        $validacao = $this->validate([

            'nome' => 'required|alpha_space',
            'apelido' => 'required'

        ],[

            'nome' => [
                'required' => 'Nome é um campo de preenchimento obrigatório',
                'alpha_space' => 'Nome só pode conter letras e espaços'
            ],

            'apelido' => [
                'required' => 'Apelido é um campo de preenchimento obrigatório',
            ]
        ]);


        if (!$validacao) {
            return redirect()->to(site_url('public/main/index15'))->withInput()->with('erro', $this->validator);
        } else {
            echo 'Formulário preenchido com sucesso';

        }

}





public function index16()
    {
        $db = db_connect();

        echo '<pre>';
        $tabelas = $db->listTables();
        print_r($tabelas);


        $colunas = $db->getFieldNames('cliente');
        echo '<pre>';
        print_r($colunas);

        $db->close();




}



public function index17(){

        $Clientes = new Clientes();
        $resultados = $Clientes->todosClientes();

        echo '<pre>';
        print_r($resultados);



}








//erro


public function index18(){
    $db = db_connect();

        $tabela = $db->table('cliente');



        $dados = $tabela->get();



       foreach($dados->getResult('cliente') as $clientes){

           echo $clientes->nome  . '</br>';

       }



       $db->close();

}








public function index19(){

    $db= db_connect();
    $t = $db->table('cliente');

    $dados = $t->select('idCliente, nome, profissao')->get()->getResultObject();
    
    $this->printArray($dados);

    $db->close();

    //echo '<pre>';
    //print_r($dados);


}



public function index20(){
    $db= db_connect();

    $dados = [
        'nome' => 'Amanda',
        'email' => 'Amanda@gmail.com',
        'profissao' => 'Cozinheira',
    ];


    $t = $db->table('cliente')->insert($dados);

    
    
    $this->printArray($dados);

    $db->close();

}


public function index21(){
    $db= db_connect();

    $dados = [
        'nome' => 'Amanda',
        'email' => 'Amanda@gmail.com',
        'profissao' => 'Cozinheira',
    ];


    $t = $db->table('cliente')->where('idCliente', 5)->update($dados);

    
    
    $this->printArray($dados);

    $db->close();


}




public function index22_delete(){
    $db= db_connect();

    $t = $db->table('cliente')->delete(['idCliente' => 23]);

    
    $this->printArray($t);

    $db->close();




}


public function printArray($dados){
    if(is_array($dados)){
        echo '<pre>';
        print_r($dados);

    } else {
        echo $dados;
    }




}


public function model(){

    $cliente = new Modelo();
    $cliente = $cliente->buscarCliente(3);
    $this->printArray($cliente);




}














}