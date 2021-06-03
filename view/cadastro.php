<?php 
  require "components/header.php";
?>
  <body>
    <?php include("components/nav.php"); ?>
    <div class="alert alert-danger" role="alert" id="divErros"></div>
    <center><h1>Faça o seu cadastro!</h1></center>
    <br />
    <?php include("components/cadastroForm.php"); ?>
    <?php include("components/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
