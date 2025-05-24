<?php
session_start();
if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM contatos WHERE id = $id");
}

header("Location: index.php");
exit;
?>