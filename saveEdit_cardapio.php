<?php 
include_once('conexao.php');

if(isset($_POST['update'])){
        $id = $_POST['ID'];
  
        $nome = $_POST["Nome"];
        $preco = $_POST["Preco"];
        $tempoP = $_POST["Tempo_P"];
        $sqlUpdate = "UPDATE cardapio SET  Nome='$nome',Preco='$preco', Tempo_P='$tempoP' 
        WHERE ID='$id'";
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela_cardapio.php');















?>