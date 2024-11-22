<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="processa_cadastro_cliente.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="sorenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>
        <label for="cpf">cpf:</label>
        <input type="text" id="cpf" name="cpf" required>
        <label for="datanascimento">DataNascimento:</label>
        <input type="text" id="datanascimento" name="datanascimento" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php

session_start();

$_SESSION['username'] = 'usuario123';
$_SESSION['email'] = 'usuario123@example.com';

echo 'Nome de usuário: ' . $_SESSION['username'];
echo 'Email: ' . $_SESSION['email'];

$_SESSION['username'] = 'novo_usuario';

echo 'Novo nome de usuário: ' . $_SESSION['username'];

unset($_SESSION['username']);

session_destroy();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["Nome"];
    $sobrenome = $_POST["Sobrenome"];
    $datanascimento = $_POST["DataNascimento"];
    $cpf = $_POST["Cpf"];
    $email = $_POST["Email"];
    $telefone = $_POST["Telefone"];
    $senha = $_POST["Senha"];

    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $database = "seu_banco_de_dados";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) == TRUE) {
        echo "Cliente cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o cliente: " . $conn->error;
    }

    $conn->close();
}
?>