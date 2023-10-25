<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    
    $nome = $_POST['Nome'];
    $tempoM = $_POST['Tempo_M'];
    $frete = $_POST['Frete'];

    $sql ="INSERT INTO entregadores (Nome,Tempo_M, Frete ) VALUES (?, ?, ?)"; 
    $stmt = $conexao->prepare($sql);


    if($stmt == FALSE){
        die("erro na preparação da consulta". $conexao->error); 
    }
    $stmt->bind_param("sss", $nome, $tempoM, $frete);
        
    // Executa a consulta
    if ($stmt->execute()) {
        header("Location: tabela_entregadores.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $conexao->error);
    }

}


?>