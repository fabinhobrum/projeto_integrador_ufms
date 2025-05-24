<?php
session_start();
if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $sql = "UPDATE contatos SET nome=?, telefone=?, email=?, assunto=?, mensagem=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $nome, $telefone, $email, $assunto, $mensagem, $id);
        $stmt->execute();

        header("Location: index.php");
        exit;
    }

    $resultado = $conn->query("SELECT * FROM contatos WHERE id = $id");
    $contato = $resultado->fetch_assoc();
} else {
    header("Location: index.php");
    exit;
}
?>

<h1>Editar Contato</h1>
<form method="post">
    <label>Nome: <input type="text" name="nome" value="<?= $contato['nome'] ?>" required></label><br>
    <label>Telefone: <input type="text" name="telefone" value="<?= $contato['telefone'] ?>" required></label><br>
    <label>Email: <input type="email" name="email" value="<?= $contato['email'] ?>" required></label><br>
    <label>Assunto: <input type="text" name="assunto" value="<?= $contato['assunto'] ?>"></label><br>
    <label>Mensagem:<br><textarea name="mensagem" rows="4" cols="50"><?= $contato['mensagem'] ?></textarea></label><br>
    <button type="submit">Salvar Alterações</button>
</form>
<a href="index.php">Voltar</a>