<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap.min.css') ?>">
    <link rel="stylesheet" href=<?= base_url('public/assets/font-awesome-4.7.0/css/font-awesome.min.css')?>>

</head>
<body>


<?= $this->rendersection('conteudo')  ?>

<hr>
<footer class="container">
    <div class="row">
        <div class="col text-center">
          Data list &copy; <?= date('Y') ?>
        </div>
   </div>

</footer>
    
<script src="<?= base_url('public/assets/jquery.min.js')?>"></script>
<script src="<?= base_url('public/assets/popper.min.js')?>"></script>
<script src="<?= base_url('public/assets/bootstrap.min.js')?>"></script>

</body>
</html>