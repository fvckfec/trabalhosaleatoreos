<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conexao->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header("Location: painel.php"); 
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>
    <button type="submit">Entrar</button>
</form>

<?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
