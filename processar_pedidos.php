<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidade = $_POST["quantidade"];

    if (!isset($_SESSION["total_itens"])) {
        $_SESSION["total_itens"] = 0;
    }

    if (!isset($_SESSION["preco_total"])) {
        $_SESSION["preco_total"] = 0;
    }

    // Preço unitário do item
    $preco_unitario = 10.00;

    // Atualiza a quantidade total de itens no pedido
    $_SESSION["total_itens"] += $quantidade;

    // Atualiza o preço total do pedido
    $_SESSION["preco_total"] += ($quantidade * $preco_unitario);

    header("Location: Pedidos.php");
}
?>
