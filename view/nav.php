<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="./home">CompraCerta</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="./home">Home</a></li>
        <li><a href="./produtos">Produtos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="not-signed">
        <a href="./login"
            ><span class="glyphicon glyphicon-log-in"></span> Login</a
        >
        </li>
        <li class="signed">
        <a href="./carrinho"
            ><span class="glyphicon glyphicon-shopping-cart"></span>
            Carrinho</a
        >
        </li>
        <li class="signed">
        <a href="./conta"
            ><span class="glyphicon glyphicon-user"></span> Minha Conta</a
        >
        </li>
        <li class="signed">
        <a class="" onclick="signout()" href="./login"
            ><span class="glyphicon glyphicon-log-out"></span> Sair</a
        >
        </li>
    </ul>
    </div>
</nav>