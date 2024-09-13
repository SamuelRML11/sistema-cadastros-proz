<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Lista de Usuários Cadastrados</h1>
    <ul>
        <?php
        if (isset($_SESSION['usuarios']) && count($_SESSION['usuarios']) > 0) {
            foreach ($_SESSION['usuarios'] as $usuario) {
                echo "<li>Nome: " . $usuario['nome'] . " - Email: " . $usuario['email'] . "</li>";
            }
        } else {
            echo "<li>Nenhum usuário cadastrado.</li>";
        }
        ?>
    </ul>
    <a href="index.php">Voltar ao início</a>
</div>
</body>
</html>
