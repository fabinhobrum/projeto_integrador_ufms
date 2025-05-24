<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["logado"] = true;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login | Área Administrativa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="login-box">
        <h2>Área Administrativa</h2>
        <?php if (isset($erro)) echo "<p class='error'>$erro</p>"; ?>
        <form method="post">
            <input type="text" name="usuario" placeholder="Usuário" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>