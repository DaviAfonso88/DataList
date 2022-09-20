<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
     
        helper('form');
        echo form_open('public/main/novocliente')
     
    ?>

    <input type="text" name="nome" required><br>
    <input type="email" name="email" required><br>
    <input type="profissao" name="profissao" required><br>
    <input type="submit" value="gravar">


    <?= form_close() ?>


</body>
</html>