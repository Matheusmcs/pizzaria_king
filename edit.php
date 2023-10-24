<?php 

if (!empty($_GET['id'])) {
    include_once('conexao.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT *FROM usuarios where id=$id";
    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0) {
        while($user_date = mysqli_fetch_assoc($result)){
       $email = $user_date["email"];
   $senha = /*password_hash(*/ $user_date["senha"]/*, PASSWORD_BCRYPT)*/;
      /* $confirmar_senha = $_POST["confirmar_senha"];*/
       $nome = $user_date["nome"];
       $endereco = $user_date["endereco"];
       $telefone = $user_date["telefone"];
    }}else{
    header('Location: tabela.php');
}}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seu cadastro</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body class="body2">
 
    <div class="container-fluid containerII">

      
      <form action="saveEdit.php" method="post">
        <!--<label for="email">Informe seu E-mail:</label>-->
        <input 
        type="email"
        class="caixa email input" 
        name="email"
        placeholder="digite seu email"
        value="<?php echo $email ?>"
        id="email"
        required 
        />
        
      <!--<label for="senha">Crie uma senha: </label>-->
      <input 
      
      type="password" 
      class="caixa senha input" 
      name="senha" 
      placeholder="crie uma senha"
      value="<?php echo $senha ?>"
      id="senha"
      required
        />
        <!--<label for="senhaII">Informe a senha novamente: </label> -->
        <!--  <input 
        type="password" 
        class="caixa senha input" 
        name="confirme_senha" 
        placeholder="confirme a senha"
        required
        />-->
        
       <!-- <label for="nome">Informe seu Nome:</label>-->
       <input 
       type="text" 
        class="nome_cliente caixa input" 
        name="nome" 
        placeholder="Digite seu nome completo"
        required
        value="<?php echo $nome ?>"
        id="nome"
        />
        
       <!-- <label for="endereco">Informe seu endereço: </label>-->
        <input
        type="text"
        class="endereco_cliente caixa input"
        name="endereco"
          placeholder="digite seu endereço"
          required
          value="<?php echo $endereco ?>"
          id="endereco"
          />
        <!--  <label for="telefone">Informe seu telefone</label>-->
        <input
        type="text"
        class="telefone_cliente caixa input"
        name="telefone"
        placeholder="Digite seu numero de telefone"
        value="<?php echo $telefone ?>"
        required
        id="telefone"
        />
        <input type="hidden" name="id" id="id" value=<?php echo $id;?>>
       <input type="submit" value="enviar" name="update" class="input submit" />
       <p class="p1">pra adicionar <a class="link-login" href="login.php">clique aqui!</a></p>
      </form>
    </div>
  </body>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>