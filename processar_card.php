<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    
    $nome = $_POST['Nome'];
    $valor = $_POST['Preco'];
    $tempoP = $_POST['Tempo_P'];

    $sql ="INSERT INTO cardapio (Nome,Preco, Tempo_P ) VALUES (?, ?, ?)"; 
    $stmt = $conexao->prepare($sql);


    if($stmt == FALSE){
        die("erro na preparação da consulta". $conexao->error); 
    }
    $stmt->bind_param("sss", $nome, $valor, $tempoP);
        
    // Executa a consulta
    if ($stmt->execute()) {
        header("Location: tabela_cardapio.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $conexao->error);
    }

}


?>