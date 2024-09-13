<?php
session_start();

session_unset();

session_destroy();

header('Location: http://localhost/trabalho%20proz/login.php');
exit();
?>
