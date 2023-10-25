<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    $nome = $_POST['Nome'];
    $validade = $_POST['Validade'];
    $valor = $_POST['Valor'];

    $sql ="INSERT INTO promocoes (Nome,Validade, Valor ) VALUES (?, ?, ?)"; 
    $stmt = $conexao->prepare($sql);


    if($stmt == FALSE){
        die("erro na preparação da consulta". $conexao->error); 
    }
    $stmt->bind_param("sss", $nome, $validade, $valor);
        
    // Executa a consulta
    if ($stmt->execute()) {
        header("Location: tabela_promocoes.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $conexao->error);
    }

}


?>