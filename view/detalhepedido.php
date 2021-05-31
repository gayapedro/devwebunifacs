<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css" />
    <script src="../js/scripts.js"></script>
    <title>CompraCerta</title>
  </head>
  <body>
    <?php include("nav.php"); ?>
    <div class="container">
      <h1>Detalhes da Compra</h1>
      <br />
      <div class="container text-center status-compra">
        <div class="col-md-3 status-compra">
          <span style="color: green" class="glyphicon glyphicon-ok"></span>
          <p>Pedido Recebido</p>
          <p>03/04/2021</p>
          <p>09:07</p>
        </div>
        <div class="col-md-3 status-compra">
          <span
            style="color: green"
            class="glyphicon glyphicon-shopping-cart"
          ></span>
          <p>Pedido Separado</p>
          <p>03/04/2021</p>
          <p>11:23</p>
        </div>
        <div class="col-md-3 status-compra">
          <span style="color: green" class="glyphicon glyphicon-gift"></span>
          <p>Pedido Embalado</p>
          <p>03/04/2021</p>
          <p>11:44</p>
        </div>
        <div class="col-md-3 status-compra">
          <span style="color: green" class="glyphicon glyphicon-send"></span>
          <p>Pedido Entregue</p>
          <p>03/04/2021</p>
          <p>13:20</p>
        </div>
      </div>

      <h2>Itens</h2>

      <div class="media">
        <div class="media-left">
          <img
            src="../assets/arroz.jpg"
            class="media-object"
            style="width: 60px"
          />
        </div>
        <div class="media-body">
          <h4 class="media-heading">Arroz Tio João 1kg</h4>
          <p>Qtd: 2 Preço Unit.: R$ 5,49</p>
        </div>
      </div>
      <div class="media">
        <div class="media-left">
          <img
            src="../assets/cafe.png"
            class="media-object"
            style="width: 60px"
          />
        </div>
        <div class="media-body">
          <h4 class="media-heading">Café 3 Corações 500g</h4>
          <p>Qtd: 3 Preço Unit.: R$ 8,74</p>
        </div>
      </div>
      <div class="media">
        <div class="media-left">
          <img
            src="../assets/feijao.jpg"
            class="media-object"
            style="width: 60px"
          />
        </div>
        <div class="media-body">
          <h4 class="media-heading">Feijão Carioca Camil 1kg</h4>
          <p>Qtd: 1 Preço Unit.: R$ 7,49</p>
        </div>
      </div>
      <h2>Total</h2>
      <h3>R$ 44,69</h3>
      <a href="./carrinho.php">
        <button class="btn btn-primary" type="button">Comprar Novamente</button>
      </a>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
