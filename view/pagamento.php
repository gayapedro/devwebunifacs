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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="../style.css" />
    <script src="../js/scripts.js"></script>
    <title>CompraCerta</title>
  </head>
  <body>
    <?php include("nav.php"); ?>
    <h1 class="text-center">Dados de Pagamento</h1>
    <div class="container text-center dadoscartao">
      <div class="container col-md-4 text-right">
        <form action="/confirmacao.php">
          <div class="form-group">
            <label for="numeroCartao">Número do Cartão</label>
            <input
              required
              class="form-control"
              id="numeroCartao"
              name="numeroCartao"
              type="text"
              size="19"
              onkeypress="$(this).mask('0000 0000 0000 0000');"
            />
          </div>
          <div class="form-group">
            <label for="nomeCartao">Nome do Titular</label>
            <input
              required
              class="form-control"
              id="nomeCartao"
              name="nomeCartao"
              type="text"
              size="22"
            />
          </div>
          <div class="form-group">
            <label for="validadeCartao">Validade (MM/AA)</label>
            <input
              required
              class="form-control"
              type="text"
              name="validadeCartao"
              id="validadeCartao"
              size="1"
              onkeypress="$(this).mask('00/00');"
            />
          </div>
          <div class="form-group">
            <label for="codseguranca">CVV/CVC</label>
            <input
              required
              class="form-control"
              type="text"
              name="codseguranca"
              id="codseguranca"
              size="1"
              onkeypress="$(this).mask('000');"
            />
          </div>
          <div class="form-group">
            <label for="cpfCartao">CPF</label>
            <input
              required
              class="form-control"
              type="text"
              name="cpfCartao"
              id="cpfCartao"
              size="14"
              onkeypress="$(this).mask('000.000.000-00');"
            />
          </div>
          <div class="form-group">
            <label for="parcelas">Parcelas</label>
            <select required class="form-control" name="parcelas" id="parcelas">
              <option value="1">1x R$ 200,00</option>
              <option value="2">2x R$ 105,00</option>
              <option value="3">3X R$ 75,00</option>
            </select>
          </div>
          <button class="btn btn-primary">Realizar Pagamento</button>
        </form>
      </div>
      <div class="container col-md-8 text-left">
        <img src="../assets/cartao.jpg" alt="cartao" />
      </div>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
