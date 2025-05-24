<?php
session_start();
if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}
include 'conexao.php';

$resultado = $conn->query("SELECT * FROM contatos ORDER BY data_envio DESC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contatos Recebidos</title>
    <link rel="stylesheet" href="estilo-i.css">
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Contatos Recebidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Privacidade</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
        <?php while ($linha = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['telefone'] ?></td>
            <td><?= $linha['email'] ?></td>
            <td><?= $linha['assunto'] ?></td>
            <td><?= nl2br($linha['mensagem']) ?></td>
            <td><?= $linha['politica_privacidade'] ? 'Sim' : 'Não' ?></td>
            <td><?= $linha['data_envio'] ?></td>
            <td>
                <a href="editar.php?id=<?= $linha['id'] ?>">Editar</a>
                <a href="deletar.php?id=<?= $linha['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="logout.php">Sair</a>
</body>
</html>