<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    
    $nome = $_POST['Nome'];
    $cargo = $_POST['Cargo'];
    $turno = $_POST['Turno'];

    $sql ="INSERT INTO funcionarios (Nome, Cargo, Turno ) VALUES (?, ?, ?)"; 
    $stmt = $conexao->prepare($sql);


    if($stmt == FALSE){
        die("erro na preparação da consulta". $conexao->error); 
    }
    $stmt->bind_param("sss", $nome, $cargo, $turno);
        
    // Executa a consulta
    if ($stmt->execute()) {
        header("Location: tabela_funcionario.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $conexao->error);
    }

}


?>