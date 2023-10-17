<?php
session_start(); // Inicie a sessão

// Destrua todas as variáveis de sessão
session_unset();

// Destrua a sessão
session_destroy();

// Redirecione o usuário para a página de login (ou qualquer outra página desejada)
header("Location: login.php");

?>