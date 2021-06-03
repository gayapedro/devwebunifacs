<?php 
  require "header.php";
?>
  <body>
    <?php include("nav.php"); ?>
    <div class="container loginContainer">
      <div class="col-md-5 loginBox">
        <center><h1 class="center">Faça o seu login!</h1></center>
        <br />
        <form
          id="formLogin"
          name="formLogin"
          method="POST"
          action="signin"
        >
          <div class="form-group">
            <label for="emailLogin">Email:</label>
            <input
              required
              type="email"
              name="emailLogin"
              class="form-control"
              id="emailLogin"
            />
          </div>
          <div class="form-group">
            <label for="senhaLogin">Senha:</label>
            <input
              required
              type="password"
              name="senhaLogin"
              class="form-control"
              id="senhaLogin"
            />
          </div>
          <center>
            <button type="submit" class="btn btn-primary" id="loginSubmit">Entrar</button>
            <p class="lblRegister">
              Não possuia uma conta?
              <a href="./cadastro">Cadastre-se aqui</a>
            </p>
          </center>
        </form>
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
