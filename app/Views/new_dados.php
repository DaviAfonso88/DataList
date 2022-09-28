<?= $this->extend('layouts/layouts_projeto') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-5">
            <h3 class="text-center">PROJETO DB</h3>
        
        </div>
        <div class="col text-center p-5">
            <h3>NOVA TAREFA</h3>
        </div>
    </div>
</headder>


<hr>

<?php
helper('form');
echo form_open('public/main/newdadossubmition')
?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        <div class="form-group">
            <label>Designação da tarefa:</label>
            <input type="text" name="data_name" class="form-control" required>
      </div>

        <div class="row">
            <div class="col">
                <a href="<?= site_url('public/main/projeto')?>" class="btn btn-secondary">Cancelar</a>
            </div>
          <div class="col text-right">
             <input type="submit" value="Gravar" class="btn btn-primary">
          </div>
     </div>
 </div>

</div>
<?= form_close() ?>


<?= $this->endsection() ?>
