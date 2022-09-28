<?= $this->extend('layouts/layouts_projeto') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <div style="color:blue">
            <h3 class="col text-center p-3">PROJETO DB</h3>
        
        </div>
        <div class="col text-right p-3">
            <a href="<?= site_url('public/main/new_dados')?>" class="mx-2 btn-sm btn-primary">Criar uma nova tarefa</a>
        </div>
    </div>
</header>


<hr>

<div class="container">
    <div class="row">
    <?php if(count($dados) == 0):?>
     <p class="text-center">Não existem tarefas </p>

    <?php else:?>

    <table class="table table-striped table-sm">
 <thead class="thead-dark">
    <tr>
        <th>Tarefa</th>
        <th class="text-center">Data de Criação</th>
        <th class="text-center">Data de finalização</th>
        <th></th>
    </tr>
 </thead>
 <tbody>
       <?php foreach ($dados as $dado): ?>
        <tr>
            <td class="text-center"><?= $dado->job ?></td>
            <td class="text-center"><?= $dado->datetime_created ?></td>
            <td class="text-center"><?= $dado->datetime_finished ?></td>
            <td class="text-center">  

                <!-- tarefa realizada -->              
                <?php if(empty($dado->datetime_finished)):?>
                  <a href="<?= site_url('public/main/dadosdone/'.$dado->id_job)?>" class="btn btn-success btn-sm mx-2"><i class="fa fa-check"></i></a>
                <?php else: ?> 
                    <button class="btn btn-danger btn-sm mx-2" disabled><i class="fa fa-times"></i></button>
                <?php endif; ?>

                <!-- editar tarefa --> 
                <?php if(empty($dado->datetime_finished)): ?>
                    <a href="<?= site_url('public/main/editdados/'.$dado->id_job)?>" class="btn btn-primary btn-sm mx-2"><i class="fa fa-pencil"></i></a>
                <?php else: ?>
                    <button class="btn btn-primary btn-sm mx-2" disabled><i class="fa fa-pencil"></i></button>
                <?php endif; ?>

                <!-- eliminar tarefa --> 
                <a href="<?= site_url('public/main/deletedados/'.$dado->id_job)?>" class="btn btn-warning btn-sm mx-2"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
       <?php endforeach;?>
   </tbody>
</table>

<p>N. de Tarefas: <strong><?= count($dados)?></strong></p>
<?php endif; ?>

    </div>
</div>

<?= $this->endsection() ?>
