<?php 

if (!empty($_GET['ID'])) {
    include_once('conexao.php');
    $id = $_GET['ID'];
    $sqlSelect = "SELECT *FROM funcionarios where ID=$id";
    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0) {
        while($user_data = mysqli_fetch_assoc($result)){
     
       $nome = $user_data["Nome"];
       $Cargo = $user_data["Cargo"];
       $turno = $user_data["Turno"];
    }}else{
    header('Location: tabela_funcionario.php');
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

      
      <form action="saveEdit_funcionarios.php" method="post">
        <!--<label for="email">Informe seu E-mail:</label>-->
     
       <input 
       type="text" 
        class=" caixa input" 
        name="Nome" 
        placeholder="Digite seu nome completo"
        required
        value="<?php echo $nome ?>"
        id="Nome"
        />
       <input 
       type="text" 
        class=" caixa input" 
        name="Cargo" 
        placeholder="Digite seu nome completo"
        required
        value="<?php echo $Cargo ?>"
        id="Cargo"
        />
        
       <!-- <label for="endereco">Informe seu endereço: </label>-->
        
        <!--  <label for="turno">Informe seu telefone</label>-->
        <input
        type="text"
        class="telefone_cliente caixa input"
        name="Turno"
        placeholder="Digiteo turno"
        value="<?php echo $turno ?>"
        required
        id="Turno"
        />
        <input type="hidden" name="ID" id="ID" value="<?php echo $id;?>">
       <input type="submit" value="enviar" name="update" class="input submit" />
       <p class="p1">pra adicionar <a class="link-login" href="#.php">clique aqui!</a></p>
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