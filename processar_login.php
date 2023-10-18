<?php 
    session_start();
    var_dump("teste");
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Use prepared statements para evitar SQL Injection
        $sql = "SELECT * FROM usuarios WHERE email = ? and senha = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if($resultado->num_rows < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            // Redirecione usando header
            header('Location: login.php');
            exit();
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            // Redirecione usando header
            header('Location: promocoes.php');
            exit();
        }
    }
    else{
        // Redirecione usando header
        header('Location: login.php');
        exit();
    }
?>
