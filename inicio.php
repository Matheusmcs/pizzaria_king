<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="body2">

  
  <header>

    <nav class="navbar navbar-expand-lg nav">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <a class="a-logo" href="inicio.html">
            <h1 class="logo">Pizzaria <strong id="h1y">King</strong></h1>
            <!--a logo que eu transformei em letras porque não estou conseguindo colocar as imagens transparentes-->
          </a>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item"><a class="btn btn-outline-light ml-4 btn-warning a-inicio" href="login.php">Entrar</a></li>
              <li class="nav-item"><a class="btn btn-outline-light ml-4 btn-warning a-inicio" href="cadastrar.php">cadastrar</a></li>

            </ul>
          </div>
        </div>
      </div>

    </nav>

  </header>
  <main>
    <div class="row">
      <div class="col-md-6">
        <h1>Bem vindo ao Pizzaria King</h1>
        <p class="p-home">aqui você podera desfrutar de  pizzas como um REI !!</p>
      </div>
      <div class="col-md-6">
        <h1>exemplos de pizza</h1>
        <div class="div-inicio">

          <div id="carouselExampleAutoplaying " class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid2" src="imagens/pizza_calabresa.png" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img class="img-fluid2" src="imagens/pizza_frango.png" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img class="img-fluid2" src="imagens/pizza_chocolate.png" class="d-block w-50" alt="...">
              </div>
            </div>
           
          </div>
        </div>
        <a class="btn btn-outline-light ml-4 btn-warning a-inicio" href="pedidos.php">venha conferir outras pizzas</a>
        <a class="btn btn-outline-light ml-4 btn-warning a-inicio" href="promocoes.php">venha conferir as nossas promoções</a>
      </div>
    </div>
  </main>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>