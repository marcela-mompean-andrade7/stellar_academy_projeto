<?php

require "config.php";

if(isset($_POST['email'])){

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $conn->query("SELECT * FROM usuarios WHERE email='$email'");

if($sql->num_rows == 1){

$user = $sql->fetch_assoc();

if(password_verify($senha,$user['senha'])){

$_SESSION['usuario'] = $user['nome'];

header("Location: home.php");
}
}
}
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Stellar Academy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Stellar Academy</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <button>Entrar</button>
            </form>
        <a href="cadastro.php">Criar conta</a>
    </div>
</body>
</html>