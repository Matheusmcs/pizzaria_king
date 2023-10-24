<?php

if(!empty($_GET['ID']))
{
    include_once('conexao.php');

    $id = $_GET['ID'];

    $sqlSelect = "SELECT *  FROM cardapio WHERE ID=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM cardapio WHERE ID=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: tabela_cardapio.php');
   
?>