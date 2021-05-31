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
    <div class="container loginContainer">
      <div class="col-md-5 loginBox">
        <center><h1 class="center">Faça o seu login!</h1></center>
        <br />
        <form
          id="formLogin"
          action="./conta.php"
          method="GET"
          onsubmit="signin();"
        >
          <div class="form-group">
            <label for="email">Email:</label>
            <input
              required
              type="email"
              name="email"
              class="form-control"
              id="email"
            />
          </div>
          <div class="form-group">
            <label for="senha">Senha:</label>
            <input
              required
              type="password"
              name="senha"
              class="form-control"
              id="senha"
            />
          </div>
          <center>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <p class="lblRegister">
              Não possuia uma conta?
              <a href="./cadastro.php">Cadastre-se aqui</a>
            </p>
          </center>
        </form>
      </div>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
