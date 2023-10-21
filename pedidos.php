<?php


session_start();

$pizza_precos = [
    "calabresa" => 15.50,
    "peperoni" => 19.50,
    "marguerita" => 25.50,
    "portuguesa" => 25.50,
    "chocoboom" => 60.50,
    "frango_requeijao" => 25.50
];

$quantidades = [];
$precos_totais = [];

foreach ($pizza_precos as $sabor => $preco) {
    $quantidades[$sabor] = isset($_SESSION["quantidade_$sabor"]) ? $_SESSION["quantidade_$sabor"] : 0;
    $precos_totais[$sabor] = isset($_SESSION["preco_total_$sabor"]) ? $_SESSION["preco_total_$sabor"] : 0.00;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($pizza_precos as $sabor => $preco) {
        $quantidade = $_POST["quantidade_$sabor"];
        if (!isset($_SESSION["quantidade_$sabor"])) {
            $_SESSION["quantidade_$sabor"] = 0;
        }
        if (!isset($_SESSION["preco_total_$sabor"])) {
            $_SESSION["preco_total_$sabor"] = 0;
        }
        $_SESSION["quantidade_$sabor"] += $quantidade;
        $_SESSION["preco_total_$sabor"] += ($quantidade * $preco);
    }
}

$quantidade_total = array_sum($quantidades);
$preco_total = number_format(array_sum($precos_totais), 2);
?>
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
            <!--a logo que eu transformei em letras porque não estou conseguindo colocar as imagens transparentes-->
          </a>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link1 dropdown-toggle a-dropdown btn btn-outline-light ml-4 btn-warning" href="#"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perfil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Cupons</a></li>
              <li><a class="dropdown-item" href="logof.php">Sair</a></li>
            </ul>
            </li>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <main class="main-principal">
        <div class="row">
            <?php foreach ($pizza_precos as $sabor => $preco) { ?>
                <div class="col-md-4 div">
                    <div class="div-pedido">
                        <img src="imagens/pizza_<?php echo $sabor; ?>.png" class="img-fluid2" alt="pizza-<?php echo $sabor; ?>">
                        <h2 class="h2-pedidos">Pizza <?php echo ucfirst($sabor); ?></h2>
                        <p class="p-pedidos">Pizza mais amada do Brasil, calabresa, cebola, molho de tomate, mussarela.</p>
                        <div class="pedido">
                            <form action="pedidos.php" method="post">
                                <span class="item-nome">Item do Pedido</span>
                                <span class="item-preco">R$ <?php echo number_format($preco, 2); ?></span>
                                <div class="quantidade">
                                    <input type="number" name="quantidade_<?php echo $sabor; ?>" value="1" min="1">
                                    <input type="submit" value="Confirmar Pedido">
                                </div>
                            </form>
                        </div>
                        <div class="total-pedidos">
                            <p class="p-pedidos">Quantidade Total: <?php echo $quantidades[$sabor]; ?></p>
                            <p class="p-pedidos">Preço Total: R$ <?php echo number_format($precos_totais[$sabor], 2); ?></p>
                            <form method="post" action="limpar_pedidos.php">
                                <input type="submit" value="Limpar Pedido">
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>




  <footer class="footer">
    <h1>Envolvidos</h1>
    <ul>
      <li>
        <p>Marwin Barbosa</p>
      </li>
      <li>
        <p>Elias</p>
      </li>
      <li>
        <p>Matheus</p>
      </li>
      <li>
        <p>Kaue</p>
      </li>
      <li>
        <p>Breno</p>
      </li>
    </ul>
  </footer>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

