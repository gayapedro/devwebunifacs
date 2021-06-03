<form id="form" name="form" action="signup" method="post">
    <div class="container">
    <div class="col-md-6">
        <div class="form-group">
        <label for="nome">Nome:</label>
        <input
            required
            type="text"
            class="form-control"
            id="nome"
            name="nome"
        />
        </div>
        <div class="form-group">
        <label for="cpf">CPF:</label>
        <input
            required
            type="text"
            class="form-control"
            id="cpf"
            onkeypress="$(this).mask('000.000.000-00');"
            name="cpf"
        />
        </div>
        <div class="form-group">
        <label for="celular">Celular:</label>
        <input
            required
            type="text"
            class="form-control"
            id="telefone"
            onkeypress="$(this).mask('(00) 00000-0000');"
            name="telefone"
        />
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input
            required
            type="email"
            class="form-control"
            id="email"
            name="email"
        />
        </div>
        <div class="form-group">
        <label for="senha">Senha:</label>
        <input
            required
            type="password"
            class="form-control"
            id="senha"
            name="senha"
        />
        </div>
        <div class="form-group">
        <label for="pwdConf">Confirmação de Senha:</label>
        <input
            required
            type="password"
            class="form-control"
            id="pwdConf"
            name="passwordConf"
        />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="cep">CEP:</label>
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
        <label for="numero">Numero:</label>
        <input
            required
            type="text"
            class="form-control"
            id="numero"
            name="numero"
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
    </div>
    <div class="container">
    <div class="col-md-12">
        <center>
        <div class="form-group">
            <button
            class="btn-primary form-control registerBtn"
            type="submit"
            >
            Enviar
            </button>
        </div>

        <div class="form-group">
            <button
            class="btn-primary form-control registerBtn"
            type="reset"
            class="btn btn-default"
            >
            Limpar
            </button>
        </div>
        </center>
    </div>
    </div>
</form>