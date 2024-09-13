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
    <title>Sistema de Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Bem-vindo ao Sistema de Cadastro de Usuários</h1>
    <a href="cadastro.php">Cadastrar Novo Usuário</a>
    <br><br>
    <a href="lista.php">Ver Lista de Usuários</a>
    <br><br>
    <a href="logout.php">Sair</a>
</div>
</body>
</html>
