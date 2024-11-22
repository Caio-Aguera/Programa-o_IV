<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Campeonato</title>
</head>
<body>
    <h2>Cadastro de Campeonato</h2>
    <form action="processa_cadastro_campeonato.php" method="POST">
        <label for="nome">Nome do Campeonato:</label>
        <input type="text" id="nome" name="nome">
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais">
        <label for="ano">Ano de Fundação:</label>
        <input type="number" id="ano" name="ano">
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
$ano = $_POST['ano'];

$sql = "INSERT INTO campeonatos (nome, pais, ano) VALUES ('$nome', '$pais', '$ano')";

if ($conn->query($sql) == TRUE) {
    echo "Campeonato cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar campeonato: " . $conn->error;
}

$conn->close();
?>