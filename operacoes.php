<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BASE = "bd_pizzaria";
$TABELA = "usuarios";
$URL = "localhost";
$PASTA = "pizzaria_king";
$oper = $_GET["op"];
$oper = ($oper) ?: "X";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Operações</title>
    <style>
        * {font-family: Verdana, Arial, Helvetica, sans-serif;}
    </style>
</head>
<body>
<?php
switch ($oper) {
    case 'incluir':
?>
    <form action="operacoes.php" method="GET">
        <input type="hidden" name="op" value="add">
        <p><label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="80"></p>
        <p><label for="email">Email:</label>
            <input type="text" id="email" name="email"></p>
        <p><label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha"></p>
        <p><label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"></p>
        <p><label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
<?php
    break;
    case 'add':
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $telefone = $_GET["telefone"];
    $endereco = $_GET["endereco"];
    $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
    $sql = "INSERT INTO $TABELA (nome, email, senha, telefone, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: http://$URL/$PASTA/");
    break;
    case 'exc':
    $codigo = $_GET["codigo"];
    $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
    $sql = "DELETE FROM $TABELA WHERE codigo = $codigo";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: http://$URL/$PASTA/");
    break;
    case 'alt':
    $codigo = $_GET["codigo"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $telefone = $_GET["telefone"];
    $endereco = $_GET["endereco"];
?>
    <form action="operacoes.php" method="GET">
        <input type="hidden" name="op" value="upd">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <p><label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" size="80"></p>
        <p><label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $email ?>"></p>
        <p><label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha" value="<?php echo $senha ?>"></p>
        <p><label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo $telefone ?>"></p>
        <p><label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?php echo $endereco ?>"></p>
        <p><input type="submit" value="Alterar"></p>
    </form>
<?php
    break;
    case 'upd':
    $codigo = $_GET["codigo"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $telefone = $_GET["telefone"];
    $endereco = $_GET["endereco"];
    $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
    $sql = "UPDATE $TABELA SET nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone', endereco = '$endereco' WHERE codigo = $codigo";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: http://$URL/$PASTA/");
    break;
    default:
    echo "<h1>$oper é uma operação não conhecida</h1>";
    echo "<p><a href='http://$URL/$PASTA/'>Voltar</a></p>";
}
?>
</body>
</html>
