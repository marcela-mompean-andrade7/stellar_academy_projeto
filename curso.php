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
    <title>Curso | Stellar Academy</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h2>Curso de HTML</h2>
        <nav>
            <a href="home.php">Cursos</a>
        </nav>
    </header>

    <div class="container">
        <div class="video-area">
            <iframe src="https://www.youtube.com/embed/UB1O30fR-EE" allowfullscreen></iframe>
        </div>

        <div class="card">
            <h3>Atividade</h3>
            <p>Crie uma página HTML com título e parágrafo.</p>
            <a href="certificado.php"><button>Concluir Curso</button></a>
        </div>
    </div>
</body>
</html>