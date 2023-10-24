<?php 
include_once('conexao.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $email = $_POST["email"];
    $senha = /*password_hash(*/ $_POST["senha"]/*, PASSWORD_BCRYPT)*/;
       /* $confirmar_senha = $_POST["confirmar_senha"];*/
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $sqlUpdate = "UPDATE usuarios SET email='$email',senha='$senha', nome='$nome', telefone='$telefone', endereco='$endereco' 
        WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela.php');















?>