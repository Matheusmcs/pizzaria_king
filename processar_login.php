<?php 
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Use prepared statements para evitar SQL Injection
        $sql = "SELECT senha FROM usuarios WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($senhaHash);
        $stmt->fetch();

        if(password_verify($senha, $senhaHash)){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senhaHash; // Armazene a senha criptografada na sessão, se necessário
            header('Location: pedidos.php');
            exit();
        }
        else{
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            exit();
        }
    }
    else{
        header('Location: login.php');
        exit();
    }
?>
