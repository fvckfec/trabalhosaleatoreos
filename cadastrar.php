<?php

include_once 'cabecalho.php';
include_once 'menu.php';

?>


    <div class="conteudo">
        <h1> Cadastrar Livro </h1>
        <form action="gravar_livro.php" method="post">
            <label for="isbn"> ISBN: </label>
            <input type="text" name="isbn" id="isbn" required>
            
            <label for="titulo"> Titulo: </label>
            <input type="text" name="titulo" id="titulo" required>
            
            <label for="autor"> Autor: </label>
            <input type="text" name="autor" id="autor" required>
            
            <label for="publi"> Ano de Publicação: </label>
            <input type="number" name="publi" id="publi" required>

            <label for="genero"> Gênero: </label>
            <input type="text" name="genero" id="genero" required>
            
            <label for="sinopse"> Sinopse: </label>
            <input type="text" name="sinopse" id="sinopse" required>

            <button type="submit"> Cadastrar </button>
        </form>
    </div>


<?php
include_once 'rodape.php';
?>