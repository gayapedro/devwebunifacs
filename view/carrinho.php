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
      <h1>Carrinho</h1>
      <form action="./endereco.php">
        <?php include("carrinhoProduto.php"); ?>
        <?php include("carrinhoProduto.php"); ?>
        <?php include("carrinhoProduto.php"); ?>
        <h2>Total</h2>
        <h3 id="valorTotal">R$ 44,69</h3>
        <button class="btn btn-primary">Finalizar Compra</button>
      </form>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
