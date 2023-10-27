<?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include_once('conexao.php');
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
                $nome = $_POST["nome"];
                $endereco = $_POST["endereco"];
                $telefone = $_POST["telefone_cliente"];
            
        
            $sql = "INSERT INTO usuarios (email, senha, nome, endereco, telefone) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            
            // Verifica se a preparação da consulta foi bem-sucedida
            if ($stmt === FALSE) {
                die("Erro na preparação da consulta: " . $conexao->errno);
            }
        
            // Vincula os parâmetros
            $stmt->bind_param("sssss", $email, $senha, $nome, $endereco, $telefone);
        
            // Executa a consulta
            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                die("Erro na execução da consulta: " . $conexao->errno);
            }
        }
        
        ?>