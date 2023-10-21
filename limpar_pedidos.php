<?php
session_start();

// Limpa as variáveis de sessão
unset($_SESSION["quantidade_calabresa"]);
unset($_SESSION["quantidade_peperoni"]);
unset($_SESSION["quantidade_marguerita"]);
unset($_SESSION["quantidade_portuguesa"]);
unset($_SESSION["quantidade_chocoboom"]);
unset($_SESSION["quantidade_frango_requeijao"]);

// Redireciona de volta para a página de pedidos (pedidos.php no seu caso)
header("Location: pedidos.php");
?>
