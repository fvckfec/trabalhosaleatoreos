<?php

include_once 'cabecalho.php';
include_once 'menu.php';

include_once 'conexao.php';
?>


<div class="conteudo">
    <?php
        //receba os dados do formulario
        $id_livro = $_POST['id'];
        $isbn = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $publi = $_POST['publi'];
        $genero = $_POST['genero'];
        $sinopse = $_POST['sinopse'];
        
        //construindo a consulta sql para alterar os dados dos alunos
        
        $sql = "UPDATE livros SET isbn_livro = ?, titulo_livro = ?, autor_livro = ?, ano_publicacao = ?, genero_livro = ?, sinopse_livro = ?
                WHERE id_livro = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sssissi", $isbn, $titulo, $autor, $publi, $genero, $sinopse, $id_livro);
        
        if ($stmt -> execute()) {
            echo "<h1> Dados atualizados com sucesso </h1>";
        } else { 
            echo "<h1> Erro ao atualizar dados </h1>";
            echo $conn -> error;
        }
        
        $stmt -> close();
        $conn -> close();
        ?>

</div>


<?php
include_once 'rodape.php';
?>