<?= $this->extend('layouts/layouts_projeto') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <h3 class="text-center">PROJETO DB</h3>
        
        </div>
        <div class="col text-right p-3">
        <div style="color: red"><h3>ELIMINAR TAREFA</h3>
        </div>
    </div>
</header>
<hr>

<div class="container">
    <div class="row">
       <div class="col text-center">
           <h3>Deseja eliminar a tarefa:</h3>
           <div class="card p-3 my-3 bg-light">
               <h4><?= $job->job ?></h4>
           </div>
        </div>
   </div>

 <div class="row">
        <div class="col text-center">
       <a href="<?= site_url('public/main/projeto')?>" class="btn btn-secondary">NÃO</a>
       <a href="<?= site_url('public/main/deletedadosconfirm/'.$job->id_job)?>" class="btn btn-primary">SIM</a>

    </div>
</div>



<?= $this->endsection() ?>
