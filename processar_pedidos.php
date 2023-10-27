<?php
session_start();
include_once('conexao.php');

if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
} else {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Inicialize a variável $preco_total
    $preco_total = 0;

    foreach ($_POST as $pizza_nome => $quantidade) {
        // Certifique-se de que a quantidade é um número inteiro
        $quantidade = intval($quantidade);

        // Realize qualquer validação ou verificação necessária

        // Consulte o banco de dados para obter o preço da pizza com base no nome da pizza
        $sql = "SELECT Preco FROM cardapio WHERE Nome = '$pizza_nome'";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
        $pizza_preco = $row['Preco_total'];

        // Calcule o preço total para o item atual
        $item_preco_total = $quantidade * $pizza_preco;

        
        // Acumule o preço total de todos os itens
        $preco_total += $item_preco_total;

        // Adicione o pedido ao carrinho no banco de dados (exemplo)
        // Você deve criar uma tabela no banco de dados para armazenar os pedidos do carrinho
        $sql = "INSERT INTO carrinho (usuario_id, pizza_nome, quantidade, preco_total) VALUES ('?,?, ?, ?)";
        $conexao->query($sql);
    }
    
    // Redirecionar para a página do carrinho (substitua 'carrinho.php' pelo URL correto)
} else {
    // Redirecionar para a página de erro ou outra página adequada em caso de acesso direto a este arquivo
    header('Location: erro.php');
}
?>
