<?php 
  require "header.php";
?>
  <body>
    <?php include("nav.php"); ?>
    <div class="container">
      <h1>Seja bem-vindo, <?php echo $infoConta->getCliente()['nome'] ?>.</h1>
      <h2>Endereço</h2>
      <p><?php echo $infoConta->getEndereco()['logradouro'] ?>, <?php echo $infoConta->getEndereco()['numero'] ?></p>
      <p><?php echo $infoConta->getEndereco()['cidade'] ?> - <?php echo $infoConta->getEndereco()['UF'] ?></p>
      <p><?php echo $infoConta->getEndereco()['complemento'] ?></p>
      <p>CEP: <?php echo $infoConta->getEndereco()['cep'] ?></p>
      <h2>Últimos pedidos:</h2>
      <?php
        foreach($infoConta->getCompras() as $item):
      ?>
        <p><?php echo $item['updated_at'] ?> - R$<?php echo $item['total'] ?> <a href="./detalhepedido">Ver Mais</a></p>
      <?php endforeach; ?>
    </div>
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
