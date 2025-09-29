<?php
include_once 'cabecalho.php';
include_once 'menu.php';
include_once 'conexao.php';
?>

<div class="conteudo">
    <h1>Excluir Livro</h1>
    <?php
        // pesquisando o livro
        $isbn = $_POST['isbn'];
        
        // obtendo o titulo do livro
        $sql_select = "SELECT titulo_livro FROM livros WHERE isbn_livro = ?";
        $stmt_select = $conn->prepare($sql_select);
        $stmt_select->bind_param("s", $isbn);
        
        if ($stmt_select->execute()) {
            $result = $stmt_select->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $titulo = $row['titulo_livro'];
                
                // exclui o livro
                $sql_delete = "DELETE FROM livros WHERE isbn_livro = ?";
                $stmt_delete = $conn->prepare($sql_delete);
                $stmt_delete->bind_param("s", $isbn);
                
                if ($stmt_delete->execute()) {
                    echo "<p>$titulo foi excluído com sucesso.</p>";
                } else {
                    echo "<p>Erro ao excluir o livro.</p>";
                }
                
                $stmt_delete->close();
            } else {
                echo "<p>ISBN não encontrado.</p>";
            }
        } else {
            echo "<p>Erro ao buscar o livro.</p>";
        }

        $stmt_select->close();
        $conn->close();
    ?>
</div>

<?php
include_once 'rodape.php';
?>
