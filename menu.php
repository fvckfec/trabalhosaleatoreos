<nav>
    <ul>
        <li> <a href="index.php"> Página Inicial </a> </li>
        <li> <a href="cadastrar.php"> Cadastrar Livro </a> </li>
        <li> <a href="pesquisar.php"> Pesquisar Livro </a> </li>
        <li> <a href="alterar.php"> Alterar Livro </a> </li>
        <li> <a href="excluir.php"> Excluir Livro </a> </li>
          <?php if (isset($_SESSION['usuario_id'])): ?>
                <!-- Se estiver logado -->
                <li><a href="cadastrar.php">Cadastrar</a></li>
                <li><a href="logout.php">Sair (<?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>)</a></li>
            <?php else: ?>
                <!-- Se NÃO estiver logado -->
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
    </ul>
</nav>