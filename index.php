<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BASE = "bd_pizzaria";
$TABELA = "usuarios";
$URL = "localhost";
$PASTA = "pizzaria_king";

// Estabeleça a conexão com o banco de dados
$conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Usuários de Drogas</title>
    <style>
        * {font-family: Verdana, Arial, Helvetica, sans-serif;}
        table {border-collapse: collapse;}
        td, th {border: 1px solid #000; padding: 8px;}
        th {background-color: #333333; color: #f0f0f0;}
    </style>
</head>
<body>
<?php
$sql = "SELECT * FROM $TABELA ORDER BY telefone, nome";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        ?>
        <table>
            <tr><th>ID</th><th>Nome</th><th>Email</th><th>Senha</th><th>Telefone</th><th>Endereço</th></tr>
        <?php
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $id = $linha["id"];
            $nome = $linha["nome"];
            $email = $linha["email"];
            $senha = $linha["senha"];
            $telefone = $linha["telefone"];
            $endereco = $linha["endereco"];
            echo " <tr><td>$id</td><td>$nome</td><td>$email</td><td>$senha</td><td>$telefone</td><td>$endereco</td><td><a href='operacoes.php?op=exc&codigo=$id'>Excluir</a>&nbsp;<a href='operacoes.php?op=alt&codigo=$id&nome=$nome&Email=$email&Senha=$senha&Telfone=$telefone&Endereco=$endereco'>Alterar</a></td></tr>\n";
        }
        ?>
        </table>
        <?php
    } else {
        echo "<h1>Sem dados disponíveis</h1>";
    }

    // Feche o resultado da consulta
    mysqli_free_result($resultado);
} else {
    echo "Erro na consulta SQL: " . mysqli_error($conexao);
}

// Feche a conexão com o banco de dados
mysqli_close($conexao);
?>
<p><a href="cadastrar.php">Incluir</a></p>
</body>
</html>
