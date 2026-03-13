<?php
require "config.php";

if(!isset($_SESSION['usuario'])){
header("Location: login.php");
}

$nome = $_SESSION['usuario'];

$sql = $conn->query("SELECT * FROM usuarios WHERE nome='$nome'");
$usuario = $sql->fetch_assoc();

if(isset($_POST['novo_nome'])){

$novo_nome = $_POST['novo_nome'];

$conn->query("UPDATE usuarios 
SET nome='$novo_nome'
WHERE nome='$nome'");

$_SESSION['usuario'] = $novo_nome;

header("Location: perfil.php");
}

if(isset($_POST['nova_senha'])){

$nova_senha = password_hash($_POST['nova_senha'], PASSWORD_DEFAULT);

$conn->query("UPDATE usuarios 
SET senha='$nova_senha'
WHERE nome='$nome'");

$mensagem = "Senha atualizada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Perfil | Stellar Academy</title>

<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>

</head>

<body>

<header>

<h2>Stellar Academy</h2>

<nav>
<a href="home.php">Cursos</a>
<a href="logout.php">Sair</a>
</nav>

</header>

<div class="container">

<h2>👤 Meu Perfil</h2>

<div class="card">

<h3>Informações do Usuário</h3>

<p><strong>Nome:</strong> <?php echo $usuario['nome']; ?></p>
<p><strong>Email:</strong> <?php echo $usuario['email']; ?></p>

</div>

<div class="card">

<h3>✏️ Editar Nome</h3>

<form method="POST">

<input type="text" name="novo_nome" placeholder="Novo nome">

<button type="submit">Atualizar Nome</button>

</form>

</div>

<div class="card">

<h3>🔐 Alterar Senha</h3>

<form method="POST">

<input type="password" name="nova_senha" placeholder="Nova senha">

<button type="submit">Atualizar Senha</button>

</form>

<?php if(isset($mensagem)) echo "<p>$mensagem</p>"; ?>

</div>

<div class="card">

<h3>📚 Meus Cursos</h3>

<ul>

<li>Curso de HTML - 60%</li>
<li>Curso de CSS - 30%</li>

</ul>

</div>

</div>

</body>
</html>