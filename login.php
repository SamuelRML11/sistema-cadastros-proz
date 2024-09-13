<?php
session_start();

$login_sucesso = false;
$mensagem_erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Login fixo de exemplo (poderia ser modificado para uma validação mais robusta)
    if ($email == 'samuelproz@gmail.com' && $senha == '123456') {
        $_SESSION['logado'] = true;
        header('Location: index.php');
        exit();
    } else {
        $mensagem_erro = 'Credenciais inválidas!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <?php if ($mensagem_erro): ?>
        <p style="color: red;"><?php echo $mensagem_erro; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <input type="submit" value="Entrar">
    </form>
    <div class="credentials">
            <p><strong>Email:</strong> samuelproz@gmail.com</p>
            <p><strong>Senha:</strong> 123456</p>
        </div>
</div>
</body>
</html>
