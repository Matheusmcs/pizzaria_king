<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location: login.php');

}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Promoções</title>
</head>

<body class="body1">
  <header>
    <nav class="navbar navbar-expand-lg nav">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img id="imagem-pizza" src="imagens/pizzariaIII.jpeg" alt="" width="50" height="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="inicio.php">Home</a></li>
            <li class="nav-item"><a class="nav-link " href="cardapio.php">cardapio</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="promocoes.php">Promoções</a></li>
         </ul>

          </div>
        </div>
      </div>

    </nav>
  </header>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>