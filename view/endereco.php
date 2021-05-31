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
    <div class="container">
      <h1>Endereço de Entrega</h1>
      <form action="/pagamento.php">
        <div class="form-group">
          <input
            checked
            type="radio"
            id="padrao"
            name="endereco"
            value="cadastrado"
            onclick="hideNovoEndereco();"
          />
          <label for="padrao">Endereço Cadastrado</label>
          <p>Rua Afonso Ruy, 658 - Itaigara</p>
          <p>Salvador - BA</p>
          <p>CEP: 41.815-300</p>
        </div>
        <div class="form-group">
          <input
            type="radio"
            id="novoendereco"
            name="endereco"
            value="novoendereco"
            onclick="showNovoEndereco();"
          />
          <label for="novoendereco">Novo Endereço</label>
        </div>
        <div id="divnovoendereco">
          <div class="form-group">
            <label for="cep">CEP</label>
            <input
              required
              type="text"
              class="form-control"
              id="cep"
              onkeypress="$(this).mask('00.000-000')"
              name="cep"
            />
          </div>
          <div class="form-group">
            <input
              type="button"
              class="form-control btn-primary"
              value="Buscar CEP"
              onclick="buscarEnderecoPorCep()"
            />
          </div>
          <div class="form-group">
            <label for="logradouro">Endereço:</label>
            <input
              required
              type="text"
              class="form-control"
              id="logradouro"
              name="logradouro"
            />
          </div>
          <div class="form-group">
            <label for="complemento">Complemento:</label>
            <input
              required
              type="text"
              class="form-control"
              id="complemento"
              name="complemento"
            />
          </div>
          <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input
              required
              type="text"
              class="form-control"
              id="cidade"
              name="cidade"
            />
          </div>
          <div class="form-group">
            <label for="estado">Estado:</label>
            <input
              required
              type="text"
              class="form-control"
              id="estado"
              name="estado"
            />
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary form-control">
            Prosseguir para Pagamento
          </button>
        </div>
      </form>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
