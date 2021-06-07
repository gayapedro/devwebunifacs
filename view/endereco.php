<?php 
  require "components/header.php";
?>
  <body>
    <?php include("components/nav.php"); ?>
    <div class="container">
      <h1>Endereço de Entrega</h1>
      <form action="./pagamento" method="post">
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
          <p><?php echo $enderecoData['logradouro'] ?></p>
          <p><?php echo $enderecoData['cidade'] ?> - <?php echo $enderecoData['UF'] ?></p>
          <p>CEP: <?php echo $enderecoData['cep'] ?></p>
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
            <label for="numerinho">Numero:</label>
            <input
              type="text"
              class="form-control"
              id="numerinho"
              name="numerinho"
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
    <?php include("components/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
