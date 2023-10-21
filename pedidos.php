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
    // Obtém os elementos HTML
    const incrementarBtn = document.querySelector(".incrementar");
    const decrementarBtn = document.querySelector(".decrementar");
    const quantidadeNumero = document.querySelector(".quantidade-numero");
    const precoItem = document.querySelector(".item-preco");
    const precoTotal = document.querySelector(".preco-total");

    let quantidade = 0;
    const precoPorItem = 10.00;

    // Função para incrementar a quantidade
    incrementarBtn.addEventListener("click", function() {
        quantidade++;
        quantidadeNumero.innerText = quantidade;
        atualizarTotal();
    });

    // Função para decrementar a quantidade
    decrementarBtn.addEventListener("click", function() {
        if (quantidade > 0) {
            quantidade--;
            quantidadeNumero.innerText = quantidade;
            atualizarTotal();
        }
    });

    // Função para atualizar o total
    function atualizarTotal() {
        const total = quantidade * precoPorItem;
        precoTotal.innerText = "R$ " + total.toFixed(2);
    }

    // Inicializa o total
    atualizarTotal();
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
    <div class="row">
      <div class="col-md-4 div"> <!--1-->
        <div class="div-pedido">
          <img src="imagens/pizza_calabresa.png" class="img-fluid2" alt="pizza-calabresa">
          <h2 class="h2-pedidos">pizza-calabresa</h2>
          <p class="p-pedidos">pizza mais amada do brasil, calabresa, cebola, molho de tomate, musareala.</p>
          <div class="pedido">
            <span class="item-nome">Item do Pedido</span>
            <span class="item-preco">R$ 10.00</span>
            <div class="quantidade">
              <button class="decrementar">-</button>
              <span class="quantidade-numero">0</span>
              <button class="incrementar">+</button>
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
            <span class="item-nome">Item do Pedido</span>
            <span class="item-preco">R$ 10.00</span>
            <div class="quantidade">
              <button class="decrementar">-</button>
              <span class="quantidade-numero">0</span>
              <button class="incrementar">+</button>
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
          <span class="item-nome">Item do Pedido</span>
          <span class="item-preco">R$ 10.00</span>
          <div class="quantidade">
            <button class="decrementar">-</button>
            <span class="quantidade-numero">0</span>
            <button class="incrementar">+</button>
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
          <span class="item-nome">Item do Pedido</span>
          <span class="item-preco">R$ 10.00</span>
          <div class="quantidade">
            <button class="decrementar">-</button>
            <span class="quantidade-numero">0</span>
            <button class="incrementar">+</button>
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
          <span class="item-nome">Item do Pedido</span>
          <span class="item-preco">R$ 10.00</span>
          <div class="quantidade">
            <button class="decrementar">-</button>
            <span class="quantidade-numero">0</span>
            <button class="incrementar">+</button>
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
          <span class="item-nome">Item do Pedido</span>
          <span class="item-preco">R$ 10.00</span>
          <div class="quantidade">
            <button class="decrementar">-</button>
            <span class="quantidade-numero">0</span>
            <button class="incrementar">+</button>
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