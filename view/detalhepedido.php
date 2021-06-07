<?php
  require "components/header.php";

  function getColor($status) {

    $color = '';

    switch ($status) {
      case 'waiting':
        $color = 'grey';
        break;
      case 'doing':
        $color = '#758cfa';
        break;
      case 'done':
        $color = 'green';
        break;
      default:
        $color = '';
        break;
    }

    return $color;
  }

  function getIcon($stage) {

    $icon = '';

    switch ($stage) {
      case 'inicial':
        $icon = 'glyphicon-ok';
        break;
      case 'preparação':
        $icon = 'glyphicon-shopping-cart';
        break;
      case 'embalagem':
        $icon = 'glyphicon glyphicon-gift';
        break;
      case 'entrega':
        $icon = 'glyphicon-send';
        break;
      default:
        $icon = '';
        break;
    }

    return $icon;
  }

  function getStageName($stage) {

    $parsedStage = '';

    switch ($stage) {
      case 'inicial':
        $parsedStage = 'Pedido Recebido';
        break;
      case 'preparação':
        $parsedStage = 'Pedido Separado';
        break;
      case 'embalagem':
        $parsedStage = 'Pedido Embalado';
        break;
      case 'entrega':
        $parsedStage = 'Pedido Entregue';
        break;
      default:
        $parsedStage = '';
        break;
    }

    return $parsedStage;
  }
?>
  <body>
    <?php include("components/nav.php"); ?>
    <div class="container">
      <h1>Detalhes da Compra</h1>
      <br />
      <div class="container text-center status-compra">
        <?php foreach($compraInfo['processos'] as $item): ?>
          <div class="col-md-3 status-compra">
            <span style="color: <?php echo getColor($item['status']) ?>" class="glyphicon <?php echo getIcon($item['stage']) ?>"></span>
            <p><?php echo getStageName($item['stage']) ?></p>
            <?php if($item['status'] != 'waiting'): ?>
              <p><?php $date = new DateTime($item['updated_at']); echo $date->format('d/m/Y') ?></p>
              <p><?php $date = new DateTime($item['updated_at']); echo $date->format('H:i') ?></p>
            <?php else: ?>
              <p>Na espera</p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <h2>Itens</h2>
      <?php foreach($compraInfo['products'] as $item): ?>
      <div class="media">
        <div class="media-left">
          <img
            src="<?php echo $item['image_url'] ?>"
            class="media-object"
            style="width: 60px"
            alt="<?php echo $item['nome'] ?>"
          />
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $item['nome'] ?></h4>
          <p>Qtd: <?php echo $item['cantidad'] ?> Preço Unit.: R$ <?php echo round($item['preco'] / 100, 2) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
      <h2>Total</h2>
      <h3>R$ <?php echo round($compraInfo['total'] / 100, 2) ?></h3>
      <a href="./recompra?id=<?php echo $compraInfo['id'] ?>">
        <button class="btn btn-primary" type="button">Comprar Novamente</button>
      </a>
    </div>
    <?php include("components/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
