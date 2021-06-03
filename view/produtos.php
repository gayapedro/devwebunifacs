<?php 
  require "header.php";
?>
  <body>
    <?php include("nav.php"); ?>
    <div class="container">
      <div class="col-md-8">
        <h1>Produtos</h1>
        <h3>Categorias</h3>
        <ul class="nav nav-pills">
          <li class="<?php if(!$cat){ echo 'active'; } else { echo 'inactive'; }?>"><a href="produtos">Tudo</a></li>
          <?php
            foreach($categorias as $item):
          ?>
            <li
              class="<?php if($cat == strtolower($item['categoria'])){ echo 'active'; } else { echo 'inactive'; }?>"
            >
              <a href="<?php echo $item['categoria']?>"><?php echo $item['categoria']?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php
          foreach($produtos as $item):
        ?>
          <?php include("produto.php"); ?>
        <?php endforeach; ?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
