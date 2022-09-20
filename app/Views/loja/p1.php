<?php

foreach ($marcas as $marca) {
    echo "<li>$marca</li>";
} ?>


<!-- condição if --> 
<ul>
    <?php for($i=0; $i<count($marcas); $i++):?>
        <?php if($marcas[$i] == 'fuscao preto'):?>
            <li><?=$marcas[$i] ?></li>
            <?php endif;?>
            <?php endfor;?>

    </ul>







































