<?php

if(!empty($_GET['usuario_id']))
{
    include_once('conexao.php');

    $id = $_GET['usuario_id'];

    $sqlSelect = "SELECT *  FROM usuarios WHERE usuario_id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM usuarios WHERE usuario_id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: tabela_usuario.php');
   
?>