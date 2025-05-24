<?php
$host = "localhost";
$usuario = "fabiobru_fabbrum";
$senha = "integrador2";
$banco = "fabiobru_fabweb";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>