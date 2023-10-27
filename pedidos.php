<?php
session_start();
include_once('conexao.php');

$sql = "SELECT * FROM cardapio ORDER BY ID DESC";
$result = $conexao->query($sql);

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
  <title>THE KING´S</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
</head>

<body class="body1">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                $pizza_nome = $user_data['Nome'];
                $pizza_preco = $user_data['Preco'];
                ?>
                var input_<?php echo strtolower($pizza_nome); ?> = document.getElementById('quantidade_<?php echo strtolower($pizza_nome); ?>');
                input_<?php echo strtolower($pizza_nome); ?>.addEventListener('input', function () {
                    var quantidade = parseFloat(input_<?php echo strtolower($pizza_nome); ?>.value);
                    var preco_unitario = <?php echo $pizza_preco; ?>;
    
                    var preco_total = quantidade * preco_unitario;
                    var preco_total_element = document.getElementById('preco_total_<?php echo strtolower($pizza_nome); ?>');
                    preco_total_element.textContent = preco_total.toFixed(2);
                    calcularPrecoTotalGeral();
                });
                <?php
            }
            ?>
        });

        function calcularPrecoTotalGeral() {
            var preco_total_geral = 0;

            <?php
            mysqli_data_seek($result, 0); // Voltar para o início do resultado
            
            while ($user_data = mysqli_fetch_assoc($result)) {
                $pizza_nome = $user_data['Nome'];
                ?>
                var preco_total_<?php echo strtolower($pizza_nome); ?> = parseFloat(document.getElementById('preco_total_<?php echo strtolower($pizza_nome); ?>').textContent);
                preco_total_geral += preco_total_<?php echo strtolower($pizza_nome); ?>;
                <?php
            }
            ?>

            var preco_total_geral_element = document.getElementById('preco_total_geral');
            preco_total_geral_element.textContent = preco_total_geral.toFixed(2);
        }

        function incrementarQuantidade(pizzaNome) {
            var input = document.getElementById('quantidade_' + pizzaNome);
            var quantidade = parseInt(input.value);
            input.value = quantidade + 1;
            
            // Atualizar o campo oculto do pedido
            document.getElementById(pizzaNome).value = quantidade + 1;

            calcularPreco(pizzaNome);
        }

        function decrementarQuantidade(pizzaNome) {
            var input = document.getElementById('quantidade_' + pizzaNome);
            var quantidade = parseInt(input.value);
            if (quantidade > 0) {
                input.value = quantidade - 1;

                // Atualizar o campo oculto do pedido
                document.getElementById(pizzaNome).value = quantidade - 1;

                calcularPreco(pizzaNome);
            }
        }

        function calcularPreco(pizzaNome) {
            var input = document.getElementById('quantidade_' + pizzaNome);
            var quantidade = parseFloat(input.value);
            var preco_unitario = parseFloat(input.getAttribute('data-preco')); // Obter o preço da pizza

            var preco_total = quantidade * preco_unitario;
            var preco_total_element = document.getElementById('preco_total_' + pizzaNome);
            preco_total_element.textContent = preco_total.toFixed(2);
            calcularPrecoTotalGeral();
        }
    </script>

  <header>
    <nav class="navbar navbar-expand nav">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <a class="a-logo" href="inicio.html">
            <h1 class="logo"><strong id="pred">P</strong>izzaria <strong id="grosso">King</strong></h1>
            <!--a logo que eu transformei em letras porque não estou conseguindo colocar as imagens transparentes-->
          </a>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <li class="nav-item"><a class="btn btn-outline-light ml-4 btn-danger a-inicio"
                href="carrinho.php">Carrinho</a></li>
            <a class="nav-link1 dropdown-toggle a-dropdown btn btn-outline-light ml-4 btn-danger" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
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
  <form action="processar_pedidos.php" method="post">
        <div class="row">
            <?php
            mysqli_data_seek($result, 0); // Voltar para o início do resultado
            
            while ($user_data = mysqli_fetch_assoc($result)) {
                $pizza_nome = $user_data['Nome'];
                $pizza_preco = $user_data['Preco'];
                ?>
                <div class="col-md-4 div">
                    <div class="div-pedido">
                        <img src="imagens/pizza_<?php echo strtolower($pizza_nome); ?>.png" class="img-fluid2"
                            alt="pizza-<?php echo strtolower($pizza_nome); ?>">
                        <h2 class="h2-pedidos">Pizza -
                            <?php echo $pizza_nome; ?>
                        </h2>
                        <p class="p-pedidos">
                            <?php echo $pizza_nome; ?>, Cebola, Molho de tomate.
                        </p>
                        <div class="pedido">
                            <h2>Preço R$
                                <?php echo $pizza_preco; ?>
                            </h2>
                            <h2>Quantidade</h2>
                            <input type="number" readonly="" class="item-quantidade" name="quantidade_<?php echo strtolower($pizza_nome); ?>"
                                id="quantidade_<?php echo strtolower($pizza_nome); ?>" value="0" min="0"
                                data-preco="<?php echo $pizza_preco; ?>"> <!-- Adicione o preço como atributo de dados -->

                            <!-- Campo oculto para representar o pedido -->
                            <input type="hidden" name="<?php echo strtolower($pizza_nome); ?>" id="<?php echo strtolower($pizza_nome); ?>" value="0">
                            <button type="button" class="increment incrementar"
                                onclick="incrementarQuantidade('<?php echo strtolower($pizza_nome); ?>')">+</button>
                            <button type="button" class="decrement decrementar"
                                onclick="decrementarQuantidade('<?php echo strtolower($pizza_nome); ?>')">-</button>
                            <p>Preço total: R$ <span id="preco_total_<?php echo strtolower($pizza_nome); ?>">0.00</span></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>


        <a href="conclui.php">concluir pedido</a>
    </form>
  </main>
</body>
<!-- ... Links para Bootstrap ... -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>