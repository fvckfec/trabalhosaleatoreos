<?php
include_once 'cabecalho.php';
include_once 'menu.php';

include_once 'conexao.php';

?>

<div class="conteudo">
    <h1> Pesquisar Livros </h1>
    <table>
        <tr>
            <th> Titulo </th>
            <th> ISBN </th>
            <th> Autor </th>
            <th> Ano de Publicação </th>
            <th> Gênero </th>
            <th> Sinopse </th>
        </tr>
        
        
        <?php
            //recebendo a pesquisa
            $titulo = $_POST['titulo'];
            $sql = "SELECT * FROM livros WHERE titulo_livro LIKE ?";
            $stmt = $conn -> prepare($sql);
            $valor = "%" . $titulo . "%";
            $stmt -> bind_param("s", $valor);
            $stmt -> execute();
            
            $resultado = $stmt -> get_result();
            
            if( $resultado -> num_rows > 0) {
                while($row = $resultado -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['titulo_livro'] . "</td>";
                    echo "<td>" . $row['isbn_livro'] . "</td>";
                    echo "<td>" . $row['autor_livro'] . "</td>";
                    echo "<td>" . $row['ano_publicacao'] . "</td>";
                    echo "<td>" . $row['genero_livro'] . "</td>";
                    echo "<td>" . $row['sinopse_livro'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<h1> Nenhum livro encontrado </h1>";
            }
            
            $stmt -> close();
            $conn -> close()
        ?>
        
        
    </table>
</div>



<?php
include_once 'rodape.php';
?>