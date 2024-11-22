<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Time</title>
</head>
<body>
    <h2>Cadastro de Time</h2>
    <form action="processa_cadastro_time.php" method="POST">
        <label for="nome">Nome do Time:</label>
        <input type="text" id="nome" name="nome">
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais">
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado">
        <label for="fundacao">Ano de Fundação:</label>
        <input type="number" id="fundacao" name="fundacao">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'conexao.php';

$nome = $_POST['nome'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$fundacao = $_POST['fundacao'];

$sql = "INSERT INTO times (nome, pais, estado, fundacao) VALUES ('$nome', '$pais', '$estado', '$fundacao')";

if ($conn->query($sql) == TRUE) {
    echo "Time cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar time: " . $conn->error;
}

$conn->close();
?>