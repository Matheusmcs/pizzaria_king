<?php
/*session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location: login.php');

}
$logado = $_SESSION['email'];*/
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
          <a class="a-logo" href="inicio.html">
            <h1 class="logo">Pizzaria <strong id="grosso">King</strong></h1>
            <!--a logo que eu transformei em letras porque não estou conseguindo colocar as imagens transparentes-->
          </a>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-light ml-4 btn-warning a-inicio"
                  href="login.php">Entrar</a></li>
              <li class="nav-item"><a class="btn btn-outline-light ml-4 btn-warning a-inicio"
                  href="cadastrar.php">cadastrar</a></li>
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