<?php

include_once("cabecalho.php");
include_once("menu.php");

?>
<div class="conteudo">
    <h1>Alterar Aluno</h1>
    <form action="altera.php" method="post">
        <label for="isbn"> ISBN:</label>
        <input type="text" name="isbn" id="isbn">
        
        <button type="submit"> Pesquisar </button>
    </form>
</div>
<?php

include_once("rodape.php");

?>