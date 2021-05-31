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
      <div class="col-md-8">
        <h1>Produtos</h1>
        <h3>Categorias</h3>
        <ul class="nav nav-pills">
          <li class="active"><a href="#">Tudo</a></li>
          <li><a href="#">Açougue</a></li>
          <li><a href="#">Biscoitos</a></li>
          <li><a href="#">Hortifruti</a></li>
          <li><a href="#">Limpeza</a></li>
          <li><a href="#">Padaria</a></li>
        </ul>
        <!-- produtos -->
        <?php include("produto.php"); ?>
        <?php include("produto.php"); ?>
        <?php include("produto.php"); ?>
      </div>
      <div class="col-md-4">
        <h3>Carrinho</h3>
        <div id="divcarrinho">
          <div>
            <h4>Café 3 Corações 500g</h4>
            <p>Preço Unit.: R$ 8,74 Qtd.: 2</p>
          </div>
        </div>
        <h3>Total</h3>
        <h3 id="valorTotal">R$ 0,00</h3>
      </div>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
