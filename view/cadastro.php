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
    <script src="../js/scripts.js"></script>
    <link rel="stylesheet" href="../style.css" />
    <title>CompraCerta</title>
  </head>
  <body>
    <?php include("nav.php"); ?>
    <div class="alert alert-danger" role="alert" id="divErros"></div>
    <center><h1>Faça o seu cadastro!</h1></center>
    <br />
    <?php include("cadastroForm.php"); ?>
    <?php include("footer.php"); ?>
  </body>
</html>
