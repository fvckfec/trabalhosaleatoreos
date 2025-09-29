<?php
include_once('cabecalho.php');
include_once('menu.php');
?>

<div class="conteudo">
    <h1> Pesquisar Livros </h1>
        <form action="listar.php" method="post">
            <label for="titulo"> Titulo: </label>
            <input type="text" name="titulo" id="titulo">
            
            <button type="submit"> Pesquisar </button>
        </form>
</div>


<?php
include_once('rodape.php');
?>