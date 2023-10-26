<?php

session_start();

// Conexão com o banco de dados SQLite
$db = new Sqlite3('bd_pizzaria');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verifique as credenciais no banco de dados
  $query = $db->prepare("SELECT * FROM users WHERE username = :username");
  $query->bindValue(':username', $username, SQLITE3_TEXT);
  $result = $query->execute();
  $row = $result->fetchArray();

  if ($row && password_verify($password, $row['password'])) {
    $_SESSION['user_id'] = $row['id'];
    header("Location: dashboard.php");
  } else {
    echo "Credenciais inválidas.";
  }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>tela de login</title>
</head>
<link rel="stylesheet" href="style.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<body class="body2">
  
  <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imagens/pizzariaIII.jpeg" alt="" width="50" height="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="inicio.html">Home</a>
          <a class="nav-link" href="cardapio.php">cardapio</a>
          <a class="nav-link" href="promoções.html">Promoções</a>
          <a class="nav-link" href="quemsomos.html">Quem somos</a>
          <div>
            <a class="nav-link login-link" href="login.php">entrar</a>
          </div>
        </div>
      </div>
    </div>
  </nav>-->
  <div class="container">

    <img src="imagens/perfil.png " alt="" />

    <form action="processar_login.php" id="form" method="post">

      <input type="email" name="email" class="email caixa input" placeholder="Digite seu e-mail" required />

      <input type="password" name="senha" class="senha input" placeholder="Digite sua senha" required />

      <input type="submit" value="Logar" name="submit" class="submit input" />

      <p class="p1">Ainda não está cadastrado? <a class="link-login" href="cadastrar.php">clique aqui!</a></p>
    </form>
    
  </div>
</body>
</html>