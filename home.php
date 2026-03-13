<?php

require "config.php";

if(!isset($_SESSION['usuario'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos | Stellar Academy</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h2>Stellar Academy</h2>
        <nav>
            <a href="logout.php">Sair</a>
            <a href="perfil.php">Perfil</a>
        </nav>
    </header>

    <div class="container">
        <h3>Bem-vindo <?php echo $_SESSION['usuario']; ?></h3>
        <div class="card">
            <h3>Curso de HTML</h3>
            <p>Aprenda HTML do zero</p>
            <a href="curso.php?id=1"><button>Acessar</button></a>
        </div>

        <div class="card">
            <h3>Curso de CSS</h3>
            <p>Design moderno para sites</p>
            <a href="curso.php?id=2"><button>Acessar</button></a>
        </div>
    </div>
</body>
</html>