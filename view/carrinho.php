<?php 
  require "components/header.php";
?>
  <body>
    <?php include("components/nav.php"); ?>
    <div class="container">
      <h1>Carrinho</h1>
      <form action="./endereco">
        <?php include("components/carrinhoProduto.php"); ?>
        <?php include("components/carrinhoProduto.php"); ?>
        <?php include("components/carrinhoProduto.php"); ?>
        <h2>Total</h2>
        <h3 id="valorTotal">R$ 44,69</h3>
        <button class="btn btn-primary">Finalizar Compra</button>
      </form>
    </div>
    <?php include("components/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
