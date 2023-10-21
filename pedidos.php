<?php

session_start();

$pizza_calabresa = 15.50;
$pizza_peperoni = 19.50;
$pizza_marguerita = 25.50;
$pizza_portuguesa = 25.50;
$pizza_chocoboom = 60.50;
$pizza_frango_requeijao = 25.50;

$quantidade_total1 = isset($_SESSION["quantidade_calabresa"]) ? $_SESSION["quantidade_calabresa"] : 0;
$preco_total1 = isset($_SESSION["preco_total1"]) ? number_format($_SESSION["preco_total1"], 2) : 0.00;

// Faça o mesmo para os outros sabores de pizza

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidade_calabresa = $_POST["quantidade_calabresa"];
    $quantidade_peperoni = $_POST["quantidade_peperoni"];
    $quantidade_marguerita = $_POST["quantidade_marguerita"];
    $quantidade_portuguesa = $_POST["quantidade_portuguesa"];
    $quantidade_chocoboom = $_POST["quantidade_chocoboom"];
    $quantidade_frango_requeijao = $_POST["quantidade_frango_requeijao"];

    if (!isset($_SESSION["quantidade_calabresa"])) {
        $_SESSION["quantidade_calabresa"] = 0;
    }

    if (!isset($_SESSION["quantidade_peperoni"])) {
        $_SESSION["quantidade_peperoni"] = 0;
    }

    // Faça isso para os outros sabores de pizza

    if (!isset($_SESSION["preco_total1"])) {
        $_SESSION["preco_total1"] = 0;
    }

    if (!isset($_SESSION["preco_total2"])) {
        $_SESSION["preco_total2"] = 0;
    }

    // Faça isso para os outros sabores de pizza

    // Atualiza a quantidade total de itens no pedido
    $_SESSION["quantidade_calabresa"] += $quantidade_calabresa;
    $_SESSION["quantidade_peperoni"] += $quantidade_peperoni;
    $_SESSION["quantidade_marguerita"] += $quantidade_marguerita;
    $_SESSION["quantidade_portuguesa"] += $quantidade_portuguesa;
    $_SESSION["quantidade_chocoboom"] += $quantidade_chocoboom;
    $_SESSION["quantidade_frango_requeijao"] += $quantidade_frango_requeijao;

    // Atualiza o preço total do pedido
    $_SESSION["preco_total1"] += ($quantidade_calabresa * $pizza_calabresa);
    $_SESSION["preco_total2"] += ($quantidade_peperoni * $pizza_peperoni);
    $_SESSION["preco_total3"] += ($quantidade_marguerita * $pizza_marguerita);
    $_SESSION["preco_total4"] += ($quantidade_portuguesa * $pizza_portuguesa);
    $_SESSION["preco_total5"] += ($quantidade_chocoboom * $pizza_chocoboom);
    $_SESSION["preco_total6"] += ($quantidade_frango_requeijao * $pizza_frango_requeijao);
}

$quantidade_total = isset($_SESSION["quantidade_calabresa"]) ? $_SESSION["quantidade_calabresa"] : 0;
$preco_total = isset($_SESSION["preco_total1"]) ? number_format($_SESSION["preco_total1"], 2) : 0.00;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- O resto do seu código HTML permanece inalterado -->
</head>

<body class="body1">
    <!-- O resto do seu código HTML permanece inalterado -->

    <div class="div-pedido">
        <img src="imagens/pizza_calabresa.png" class="img-fluid2" alt="pizza-calabresa">
        <h2 class="h2-pedidos">Pizza Calabresa</h2>
        <p class="p-pedidos">Pizza mais amada do Brasil, calabresa, cebola, molho de tomate, mussarela.</p>
        <div class="pedido">
            <form action="Pedido.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ <?php echo $pizza_calabresa; ?></span>
                <input type="number" name="quantidade_calabresa" value="1" min="1">
                <input type="submit" value="Confirmar Pedido">
            </form>
            <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total: <?php echo $quantidade_total1; ?></p>
                <p class="p-pedidos">Preço Total: R$ <?php echo $preco_total1; ?></p>
                <form method="post" action="limpar_pedidos.php">
                    <input type="submit" value="Limpar Pedido">
                </form>
            </div>
        </div>
    </div>

    <!-- Repita a estrutura acima para os outros sabores de pizza -->
</body>
<!-- O restante do seu código HTML permanece inalterado -->

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
        <div class="col-md-4 div"> <!--1-->
          <div class="div-pedido">
            <img src="imagens/pizza_calabresa.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade1" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total1; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total1; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--2-->
          <div class="div-pedido">
            <img src="imagens/pizza_peperoni.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade2" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total2; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total2; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--3-->
          <div class="div-pedido">
            <img src="imagens/pizza_marguerita.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade3" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total3; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total3; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--4-->
          <div class="div-pedido">
            <img src="imagens/pizza_portuguesa.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade4" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total4; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total4; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--5-->
          <div class="div-pedido">
            <img src="imagens/pizza_gigante_chocolate.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade5" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total5; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total5; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--6-->
          <div class="div-pedido">
            <img src="imagens/pizza_frango_requeijao.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">pizza-calabresa</h2>
            <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
            <div class="pedido">
              <form action="pedidos.php" method="post">
                <span class="item-nome">Item do Pedido</span>
                <span class="item-preco">R$ 15.50</span>
                <div class="quantidade">
                  <!-- <button class="decrementar">-</button>-->
                  <input type="number" name="quantidade6" value="1" min="1">
                  <input type="submit" value="confirmar pedido">
                </div>
              </form>
              <div class="total-pedidos">
                <p class="p-pedidos">Quantidade Total:
                  <?php echo $quantidade_total6; ?>
                </p>
                <p class="p-pedidos">Preço Total: R$
                  <?php echo $preco_total6; ?>
                </p>
                <form method="post" action="limpar_pedidos.php">
                  <input type="submit" value="Limpar Pedido">
                </form>
              </div>
            </div>
          </div>
        </div>
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
