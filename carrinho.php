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
        <div id="carrinho">
        <div class="txt-heading">Carrinho</div>
        
        <a id="btnEmpty" href="pedidos.php">Fazer pedido</a>
        <?php
        if(isset($_SESSION["item_carro"])){
            $quantidadeNumeros = 0;
            $precoTotal = 0;
        ?>	
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
        <tr>
        <th style="text-align:left;">Nome</th>
        <th style="text-align:left;">Código</th>
        <th style="text-align:right;" width="5%">quantidade</th>
        <th style="text-align:right;" width="10%">Preço Unitario</th>
        <th style="text-align:right;" width="10%">Total</th>
        <th style="text-align:center;" width="5%">Remover</th>
        </tr>	
        <?php		
            foreach ($_SESSION["quantidade_calabresa"] as $item){
                $item_preco = $preco_total_calabresa};
                ?>
                        <tr>
                        <td><img src="<?php echo $item["img"]; ?>" class="cart-item-image" /><?php echo $item["h2-pedidos"]; ?></td>
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantidade_calabresa"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ".$item["pizza_calabresa"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ". number_format($item_price); ?></td>
                        <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icone_deletar.png" alt="Remove Item" /></a></td>
                        </tr>
                        <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"]*$item["quantity"]);
                }
                ?>
        
        <tr>
        <td colspan="2" align="right">Total:</td>
        <td align="right"><?php echo $total_quantity; ?></td>
        <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
        <td></td>
        </tr>
        </tbody>
        </table>		
          <?php
        } else {
        ?>
        <div class="no-records">Seu carrinho está vazio!</div>
        <?php 
        }
        ?>
        </div>
</body>