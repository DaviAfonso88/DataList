<h3>{titulo}</h3>
<hr>
<div style="color: blue"> TEXTO EM AZUL</div>
<br>
<div style="color: red"> TEXTO EM VEMELHO</div>
<br>
<div style="color: green"> TEXTO EM VERDE</div>
<hr>
{#comentario#}

<ul>
    {nomes}
    <li>{nome}</li>
    {/nomes}
</ul>
<hr>

<p>É UTILIZADOR ADIM?</p>
{if($admin)}
 <div style="color: blue"> Sim </div>
 <p>Parabéns! vc é um admin!!</p>
{else} 
<div style="color: red"> Não </div>
<h2>SAIA, VC NÃO É UM ADMIN!</h2> 
{endif}
<hr>

<p>ESTE É UM TEXTO: <UL><LI>{literal}</LI></UL>
