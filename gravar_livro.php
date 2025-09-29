<?php
include_once 'cabecalho.php';
include_once 'menu.php';
include_once 'conexao.php';


// Recebendo os dados do formulário
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$publi = $_POST['publi'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];


// Inserindo os dados no banco de dados
$sql = "INSERT INTO livros (isbn_livro, titulo_livro, autor_livro, ano_publicacao, genero_livro, sinopse_livro) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn -> prepare($sql);
$stmt -> bind_param("ississ", $isbn, $titulo, $autor, $publi, $genero, $sinopse);



if ($stmt -> execute()){
    echo "<div class='conteudo'>";
    echo "<h1> Livro cadastrado com sucesso </h1>";
    echo "</div>";
} else {
    echo "Erro ao cadastrar o livro. Informe o programador.";
    echo $conn->error;
}

$stmt ->close();
$conn->close();

include_once 'rodape.php';
?>