<?php

include_once 'cabecalho.php';
include_once 'menu.php';

include_once 'conexao.php';

?>

<div class="conteudo">

<?php

//recebendo o isbn para a pesquisa
$isbn = $_POST['isbn'];

//consulta sql para pesquisar matricula
$sql = "SELECT * FROM livros WHERE isbn_livro = '$isbn'";

//executando query
$resultado = $conn->query($sql);

if ($resultado -> num_rows > 0) {
    $row = $resultado -> fetch_assoc();
?>
    <h2> Dados do Livro </h2>
    <form action="atualizar_livro.php" method="post">
        
        <input type="hidden" name="id" value="<?php echo $row['id_livro']; ?>">
        
        
        <label for="isbn"> ISBN: </label>
        <input type="text" name="isbn" value="<?php echo $row['isbn_livro']; ?>" readonly>
        
        <label for="titulo"> Titulo: </label>
        <input type="text" name="titulo" value="<?php echo $row['titulo_livro']; ?>">
        
        <label for="autor"> Autor: </label>
        <input type="text" name="autor" value="<?php echo $row['autor_livro']; ?>">
        
        <label for="publi"> Ano de Publicação: </label>
        <input type="number" name="publi" value="<?php echo $row['ano_publicacao']; ?>">
        
        <label for="genero"> Gênero: </label>
        <input type="text" name="genero" value="<?php echo $row['genero_livro']; ?>">
        
        <label for="sinopse"> Sinopse: </label>
        <input type="text" name="sinopse" value="<?php echo $row['sinopse_livro']; ?>">
        
        <button type="submit"> Atualizar </button>
    </form>


<?php
} else {
    echo "<h2> Livro nao encontrado</h2>";
}

?>
</div>

<?php
include_once 'rodape.php';
?>