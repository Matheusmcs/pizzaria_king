<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE KING'S</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
</head>

<body class="body1">
  <?php
  session_start(); // Iniciar a sessão


  if (isset($_SESSION["item_carro"])) {
    $total_quantity = 0;
    $total_price = 0;
  ?>
    <div id="carrinho">
      <div class="txt-heading">Carrinho</div>
      <a id="btnEmpty" href="pedidos.php">Carrinho está vazio</a>

      <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th style="text-align:left;">Nome</th>
            <th style="text-align:left;">Código</th>
            <th style="text-align:right;" width="5%">Quantidade</th>
            <th style="text-align:right;" width="10%">Preço Unitário</th>
            <th style="text-align:right;" width="10%">Total</th>
            <th style="text-align:center;" width="5%">Remover</th>
          </tr>
          <?php
          foreach ($_SESSION["item_carro"] as $item) {
            $item_preco = $item["quantidade-numero"] * $item["precoItens"];
          ?>
            <tr>
              <td><img src="<?php echo $item["img"]; ?>" class="cart-item-image" /><?php echo $item["h2-pedidos"]; ?></td>
              <td><?php echo $item["code"]; ?></td>
              <td style="text-align:right;"><?php echo $item["quantidade-numero"]; ?></td>
              <td style="text-align:right"><?php echo "$ " . $item["precoItens"]; ?></td>
              <td style="text-align:right"><?php echo "$ " . number_format($item_preco, 2); ?></td>
              <td style="text-align:center"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icone_deletar.png" alt="Remove Item" /></a></td>
            </tr>
            <?php
            $total_quantity += $item["quantidade-numero"];
            $total_price += ($item_preco);
          }
          ?>
          <tr>
            <td colspan="2" align="right">Total:</td>
            <td align="right"><?php echo $total_quantity; ?></td>
            <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php
  } else {
  ?>
    <div class="no-records">Carrinho está vazio</div>
  <?php
  }
  ?>
</body>
</html>