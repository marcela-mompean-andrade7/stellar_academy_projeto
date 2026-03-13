<?php

require "config.php";

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(nome,email,senha)
VALUES('$nome','$email','$senha')";

$conn->query($sql);

header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Stellar Academy</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="login-box">
        <h2>✨ Criar Conta</h2>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Criar Conta</button>
            </form>
        <a href="login.php">Já tem conta? Entrar</a>
    </div>
</body>
</html>