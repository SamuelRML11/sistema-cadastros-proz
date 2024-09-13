<?php
session_start();

// Limpa todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login com caminho absoluto
header('Location: http://localhost/trabalho%20proz/login.php');
exit();
?>
