<?php 
include_once('conexao.php');

if(isset($_POST['update'])){
        $id = $_POST['ID'];
  
        $nome = $_POST["Nome"];
        $validade = $_POST["Validade"];
        $valor = $_POST["Valor"];
        $sqlUpdate = "UPDATE promocoes SET  Nome='$nome', Validade='$validade', Valor='$valor' 
        WHERE ID='$id'";
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela_promocoes.php');















?>