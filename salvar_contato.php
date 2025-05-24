<?php
// Conexão com o banco de dados
$host = "localhost";
$usuario = "fabiobru_fabbrum";
$senha = "integrador2";
$banco = "fabiobru_fabweb";

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['name'];
$telefone = $_POST['phone'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];
$politica = isset($_POST['politica-privacidade']) ? 1 : 0;

// Inserir no banco
$sql = "INSERT INTO contatos (nome, telefone, email, assunto, mensagem, politica_privacidade)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $nome, $telefone, $email, $assunto, $mensagem, $politica);

if ($stmt->execute()) {
    header("Location: https://projeto.fabiobrum.dev.br/index.html?sucesso=1");
} else {
    echo "Erro ao salvar: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
