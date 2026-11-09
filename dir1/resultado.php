<?php
session_start();
?>
<html>
<head>
    <title>Resultado del juego</title>
</head>
<body>
<h1>Resultado del juego</h1>
<style>
    a {
        font-family: Arial, sans-serif;
        font-size: 16px;
    }


    body {
        background-color: pink;
    }
</style>
<a href="index.php">Volver al juego</a>
</body>
<?php
if ($_SESSION['won']): ?>
    <p>¡Felicidades! Has adivinado el número secreto: <?php echo $_SESSION['secret']; ?></p>
<?php else: ?>
    <p>Lo siento, no has adivinado el número secreto. El número era: <?php echo $_SESSION['secret']; ?></p>
<?php endif; ?>
