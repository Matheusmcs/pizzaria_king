
<?php

    if(isset($_POST['submit']))
    {
    

        include_once('conexao.php');

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>adiciona cardapio</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body class="body2">
 
    <div class="container-fluid containerII">

      
      <form action="processar_entre.php" method="post">
        <!--<label for="email">Informe seu E-mail:</label>-->
        <input 
        type="text"
        class="caixa email input" 
        name="Nome"
        placeholder="Nome completo"
        required 
        />
        
      <!--<label for="senha">Crie uma senha: </label>-->
        <input 
        
        type="text" 
        class="caixa senha input" 
        name="Tempo_M" 
        placeholder="tempo médio de entrega"
        required
        />
        <!--<label for="senhaII">Informe a senha novamente: </label> -->
        <input 
        type="text" 
        class="nome_cliente caixa input" 
        name="Frete" 
        placeholder="Frete"
        required
        />
      <!--  <input 
        type="password" 
        class="caixa senha input" 
        name="confirme_senha" 
        placeholder="confirme a senha"
        required
        />-->

       <!-- <label for="nome">Informe seu Nome:</label>-->
        
       <!-- <label for="endereco">Informe seu endereço: </label>-->
        
       <input type="submit" value="cadastrar" name="cadastrar" class="input submit" />
       <p class="p1">já está cadastrado? <a class="link-login" href="login.php">clique aqui!</a></p>
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
    crossorigin="anonymous"
  ></script>
</html>
