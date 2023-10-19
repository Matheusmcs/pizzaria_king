<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE KING´S</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
  </head>

  <body class="body1">
    <header>
      <nav class="navbar navbar-expand nav">
  
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <a class="a-logo" href="inicio.html">
              <h1 class="logo">Pizzaria <strong id="grosso">King</strong></h1>
            </a>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
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
<div class="div-inicio">
  
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
      </div>

  <div class="row">
<div class="col-md-4 div">

  <div class="div-pedido">

    <img src="imagens/pizza_calabresa.png" class="img-fluid2" alt="pizza-calabresa">
    <h2>pizza-calabresa</h2>
    <p>pizza mais amada do brasil, calabresa, cebola, molho de tomate,  musareala.</p>
   
    <div class="pedido">
      <span class="item-nome">Item do Pedido</span>
      <span class="item-preco">R$ 15.50</span>
      <div class="quantidade">
        <button class="decrementar">-</button>
        <span class="quantidade-numero">0</span>
        <button class="incrementar">+</button>
        <div class="resumo-pedido">
          <span>Quantidade: <span id="quantidade-total">0</span></span>
          <span>Preço Total: R$<span id="preco-total">0.00</span></span>
        </div>
      </div>
  
  
  </div>
</div>
<!--<div class="col-md-4 div">2</div>
<div class="col-md-4 div">3</div>
<div class="col-md-4 div"></div>
<div class="col-md-4 div"></div>
<div class="col-md-4 div"></div>-->
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
