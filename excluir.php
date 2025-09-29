<?php

include_once 'cabecalho.php';
include_once 'menu.php';

?>

<div class="conteudo">
    <h1> Excluir Livro </h1>
        <form action="excluir_livro.php" method="post">
            <label for="isbn"> ISBN: </label>
            <input type="text" name="isbn" id="isbn">
            
            <button type="submit"> Excluir </button>
        </form>
</div>

<?php

include_once 'rodape.php';
?>