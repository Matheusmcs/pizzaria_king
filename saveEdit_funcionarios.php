<?php 
include_once('conexao.php');

if(isset($_POST['update'])){
        $id = $_POST['ID'];
  
        $nome = $_POST["Nome"];
        $cargo = $_POST["Cargo"];
        $turno = $_POST["Turno"];
        $sqlUpdate = "UPDATE funcionarios SET  Nome='$nome', Cargo='$cargo', Turno='$turno' 
        WHERE ID='$id'";
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela_funcionario.php');
if(isset($_POST['update'])){
        $id = $_POST['ID'];
  
        $nome = $_POST["Nome"];
        $tempo = $_POST["Tempo_M"];
        $frete = $_POST["Frete"];
        $sqlUpdate = "UPDATE entregadores SET  Nome='$nome', Tempo_M='$tempo', Frete='$frete' 
        WHERE ID='$id'";
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela_funcionario.php');















?>