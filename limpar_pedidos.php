<?php
session_start();

// Limpa as variáveis de sessão relacionadas ao pedido
unset($_SESSION["total_itens"]);
unset($_SESSION["preco_total"]);

header("Location: pedidos.php");
?>
