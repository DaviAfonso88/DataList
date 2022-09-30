<?php helper('form')?>
<?= form_open('public/main/submeter') ?>
<div>
    <a><input type="text" name="nome" value="<?= old('nome') ?>"> Nome </a>
</div>
<div>
    <a><input type="text" name="apelido" value= "<?= old('apelido') ?>"> Apelido </a>
</div>
<div>
    <input type="submit" value="Guardar">
</div>
</form>


<?php if(isset($erro)):?>

    <p><?= $erro->listErrors()?></p>

<?php endif; ?>