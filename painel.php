<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h2>
<p>Aqui é sua área restrita.</p>
<a href="logout.php">Sair</a>
