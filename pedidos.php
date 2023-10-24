<?php
session_start();

$pizza_calabresa = 15.55;
$pizza_peperoni = 20.55;
$pizza_marguerita = 25.55;
$pizza_portuguesa = 30.55;
$pizza_chocoboom = 35.55;
$pizza_frango_requeijao = 40.55;


$quantidade_calabresa = isset($_POST['quantidade_calabresa']) ? $_POST['quantidade_calabresa'] : 0;
$quantidade_peperoni = isset($_POST['quantidade_peperoni']) ? $_POST['quantidade_peperoni'] : 0;
$quantidade_marguerita = isset($_POST['quantidade_marguerita']) ? $_POST['quantidade_marguerita'] : 0;
$quantidade_portuguesa = isset($_POST['quantidade_portuguesa']) ? $_POST['quantidade_portuguesa'] : 0;
$quantidade_chocoboom = isset($_POST['quantidade_chocoboom']) ? $_POST['quantidade_chocoboom'] : 0;
$quantidade_frango_requeijao = isset($_POST['quantidade_frango_requeijao']) ? $_POST['quantidade_frango_requeijao'] : 0;

function calcularPizza($quantidade_calabresa, $pizza_calabresa)
{
  return $quantidade_calabresa * $pizza_calabresa;
}

$preco_total_calabresa = calcularPizza($quantidade_calabresa, $pizza_calabresa);
$preco_total_peperoni = calcularPizza($quantidade_peperoni, $pizza_peperoni);
$preco_total_marguerita = calcularPizza($quantidade_marguerita, $pizza_marguerita);
$preco_total_portuguesa = calcularPizza($quantidade_portuguesa, $pizza_portuguesa);
$preco_total_chocoboom = calcularPizza($quantidade_chocoboom, $pizza_chocoboom);
$preco_total_frango_requeijao = calcularPizza($quantidade_frango_requeijao, $pizza_frango_requeijao);

$preco_total_geral = $preco_total_calabresa + $preco_total_peperoni + $preco_total_marguerita + $preco_total_portuguesa + $preco_total_chocoboom + $preco_total_frango_requeijao;
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
  <script>

    document.addEventListener('DOMContentLoaded', function () {
      // Adicione um ouvinte de evento para detectar alterações nos campos de quantidade
      var input_calabresa = document.getElementById('quantidade_calabresa');
      input_calabresa.addEventListener('input', function () {
        // Obtenha o valor da quantidade e o preço da pizza de calabresa
        var quantidade = parseFloat(input_calabresa.value);
        var preco_unitario = <?php echo $pizza_calabresa; ?>;

        // Calcule o preço total e atualize o elemento na página
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_calabresa');
        preco_total_element.textContent = preco_total.toFixed(2); // Ajusta para 2 casas decimais
      });
      var input_peperoni = document.getElementById('quantidade_peperoni');
      input_peperoni.addEventListener('input', function () {
        var quantidade = parseFloat(input_peperoni.value);
        var preco_unitario = <?php echo $pizza_peperoni; ?>;
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_peperoni');
        preco_total_element.textContent = preco_total.toFixed(2);
      });
      var input_marguerita = document.getElementById('quantidade_marguerita');
      input_marguerita.addEventListener('input', function () {
        var quantidade = parseFloat(input_marguerita.value);
        var preco_unitario = <?php echo $pizza_marguerita; ?>;
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_marguerita');
        preco_total_element.textContent = preco_total.toFixed(2);
      });
      var input_portuguesa = document.getElementById('quantidade_portuguesa');
      input_portuguesa.addEventListener('input', function () {
        var quantidade = parseFloat(input_portuguesa.value);
        var preco_unitario = <?php echo $pizza_portuguesa; ?>;
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_portuguesa');
        preco_total_element.textContent = preco_total.toFixed(2);
      });
      var input_chocoboom = document.getElementById('quantidade_chocoboom');
      input_chocoboom.addEventListener('input', function () {
        var quantidade = parseFloat(input_chocoboom.value);
        var preco_unitario = <?php echo $pizza_chocoboom; ?>;
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_chocoboom');
        preco_total_element.textContent = preco_total.toFixed(2);
      });
      var input_frango_requeijao = document.getElementById('quantidade_frango_requeijao');
      input_frango_requeijao.addEventListener('input', function () {
        var quantidade = parseFloat(input_frango_requeijao.value);
        var preco_unitario = <?php echo $pizza_frango_requeijao; ?>;
        var preco_total = quantidade * preco_unitario;
        var preco_total_element = document.getElementById('preco_total_frango_requeijao');
        preco_total_element.textContent = preco_total.toFixed(2);
      });

    });
    function calcularPizza(event) {
      // Obtenha o ID do input para determinar o tipo de pizza
      var input_id = event.target.id;
      var preco_unitario = 0;

      if (input_id === 'quantidade_calabresa') {
        preco_unitario = <?php echo $pizza_calabresa; ?>;
      } else if (input_id === 'quantidade_peperoni') {
        preco_unitario = <?php echo $pizza_peperoni; ?>;
      }

      // Obtenha a quantidade do input
      var quantidade = parseFloat(event.target.value);

      // Calcule o preço total e atualize o elemento na página
      var preco_total = quantidade * preco_unitario;
      var preco_total_element = document.getElementById('preco_total_' + input_id);
      preco_total_element.textContent = preco_total.toFixed(2); // Ajusta para 2 casas decimais

      // Recalcule o preço total geral
      calcularPrecoTotalGeral();
    }

    function calcularPrecoTotalGeral() {
      // Obtenha o preço total de cada pizza
      var preco_total_calabresa = parseFloat(document.getElementById('preco_total_quantidade_calabresa').textContent);
      var preco_total_peperoni = parseFloat(document.getElementById('preco_total_quantidade_peperoni').textContent);
      var preco_total_marguerita = parseFloat(document.getElementById('preco_total_quantidade_marguerita').textContent);
      var preco_total_portuguesa = parseFloat(document.getElementById('preco_total_quantidade_portuguesa').textContent);
      var preco_total_chocoboom = parseFloat(document.getElementById('preco_total_quantidade_chocoboom').textContent);
      var preco_total_frango_requeijao = parseFloat(document.getElementById('preco_total_quantidade_frango_requeijao').textContent);

      // Some todos os preços totais
      var preco_total_geral = preco_total_calabresa + preco_total_peperoni + preco_total_marguerita + preco_total_portuguesa + preco_total_chocoboom + preco_total_frango_requeijao;

      // Atualize o preço total geral na página
      var preco_total_geral_element = document.getElementById('preco_total_geral');
      preco_total_geral_element.textContent = preco_total_geral.toFixed(2); // Ajusta para 2 casas decimais
    }

  </script>
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

    <form action="carrinho.php" method="post">
      <div class="row">
        <div class="col-md-4 div"> <!--1-->
          <div class="div-pedido">
            <img src="imagens/pizza_calabresa.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">Pizza - Calabresa</h2>
            <p class="p-pedidos">Calabresa, Cebola, Molho de tomate.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_calabresa ?>
              </h2>
              <h2>quantidade</h2>
              <input type="number" onclick="calcularPizza_calabresa()" class="item-quantidade"
                name="quantidade_calabresa" id="quantidade_calabresa" value="0" min="0">
              <p>Preço total: R$ <span id="preco_total_calabresa">
                  <?php echo $preco_total_calabresa ?>
                </span></p>


            </div>
          </div>
        </div>

        <div class="col-md-4 div"> <!--2-->
          <div class="div-pedido">
            <img src="imagens/pizza_peperoni.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">Pizza - Peperoni</h2>
            <p class="p-pedidos">Musssarela, Peperoni.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_peperoni ?>
              </h2>
              <h2>quantidade</h2>
              <input type="number" class="item-quantidade" name="quantidade_peperoni" id="quantidade_peperoni" value="0"
                min="0">
              <p>Preço total: R$ <span id="preco_total_peperoni">
                  <?php echo $preco_total_peperoni ?>
                </span></p>

            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--3-->
          <div class="div-pedido">
            <img src="imagens/pizza_marguerita.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">Pizza - Marguerita</h2>
            <p class="p-pedidos">Manjericão, Mussarela e Rodelas de tomate.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_marguerita ?>
              </h2>
              <h2>quantidade</h2>
              <input type="number" class="item-quantidade" name="quantidade_marguerita" id="quantidade_marguerita"
                value="0" min="0">
              <p>Preço total: R$ <span id="preco_total_marguerita">
                  <?php echo $preco_total_marguerita ?>
                </span></p>

            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--4-->
          <div class="div-pedido">
            <img src="imagens/pizza_portuguesa.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">Pizza - Portuguêsa</h2>
            <p class="p-pedidos">Cebola, Ervilha, Mussarela, Ovos, Palmito, Presunto.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_portuguesa ?>
              </h2>
              <h2>quantidade</h2>
              <input type="number" class="item-quantidade" name="quantidade_portuguesa" id="quantidade_portuguesa"
                value="0" min="0">
              <p>Preço total: R$ <span id="preco_total_portuguesa">
                  <?php echo $preco_total_portuguesa ?>
                </span></p>

            </div>
          </div>
        </div>
        <div class="col-md-4 div"> <!--5-->
          <div class="div-pedido">
            <img src="imagens/pizza_gigante_chocolate.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">
              Pizza - Chocolate</h2>
            <p class="p-pedidos">Chocolate, Granulado, Morango.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_chocoboom ?>
              </h2>
              <h2>quantidade</h2>
              <input type="number" class="item-quantidade" name="quantidade_chocoboom" id="quantidade_chocoboom"
                value="0" min="0">
              <p>Preço total: R$ <span id="preco_total_chocoboom">
                  <?php echo $preco_total_chocoboom ?>
                </span></p>

            </div>
          </div>

        </div>
        <div class="col-md-4 div"> <!--6-->
          <div class="div-pedido">
            <img src="imagens/pizza_frango_requeijao.png" class="img-fluid2" alt="pizza-calabresa">
            <h2 class="h2-pedidos">Pizza - Frango e Catupiry</h2>
            <p class="p-pedidos">Frango, Catupiry.</p>
            <div class="pedido">
              <h2>Preço R$
                <?php echo $pizza_frango_requeijao ?>
              </h2>
              <h2 class="l">quantidade</h2>
              <input type="number" class="item-quantidade" name="quantidade_frango_requeijao"
                id="quantidade_frango_requeijao" value="0" min="0">
              <p>Preço total: R$ <span id="preco_total_frango_requeijao">
                  <?php echo $preco_total_frango_requeijao ?>
                </span></p>
            </div>
          </div>
        </div>
      </div>

      <input type="submit" value="adicionar ao carrinho">
      



    </form>



  </main>







</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>