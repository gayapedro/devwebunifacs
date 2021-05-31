<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Cadastro de clientes</title>
</head>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <div class="row">
            <form method="post" action="../controller/cliente/CadastroController.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Digite seu e-mail" required autofocus>
                    <br>
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                    <br>
                    <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
                    <br>
                    <input class="form-control" type="text" id="numero" name="numero" placeholder="Endereço: Numero" required>
                    <br>
                    <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Endereço: Bairro" required>
                    <br>
                    <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Endereço: Cidade" required>
                    <br>
                    <input class="form-control" type="text" id="uf" name="uf" placeholder="Endereço: UF" required>
                    <br>
                    <input class="form-control" type="text" id="complemento" name="complemento" placeholder="Endereço: Complemento" required>
                    <br>
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Digite sua nova senha" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <script language="javascript" type="text/javascript">

        function validar(formulario) {
            formulario.forEach(campo => {
                if (campo.value == "") {
                    alert("Preencha o campo " + campo.name);
                    campo.focus();
                    return false;
                }
            });
            formulario.submit();
        }

    </script>
</body>

</html>
