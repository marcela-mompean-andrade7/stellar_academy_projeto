<?php

require "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="certificado">
        <p>Certificamos que</p>
        <h2><?php echo $_SESSION['usuario']; ?></h2>
        <p>concluiu o curso na</p>

        <h3>Stellar Academy</h3>
        <button onclick="window.print()">Baixar PDF</button>
    </div>
</body>
</html>