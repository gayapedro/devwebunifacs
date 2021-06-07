# Compra Certa *eComerce*

<p align="center">
  <img src="https://raw.githubusercontent.com/gayapedro/devwebunifacs/refactor/infra/favicon.ico" alt="Compracerta"/>
</p>

## Setup project

- Adicionar as seguintes envs no arquivo `C:\xampp\apache\conf\httpd.conf`
```
SetEnv BD_SERVIDOR localhost
SetEnv BD_USUARIO root
SetEnv BD_BANCO loja
SetEnv PASSWORD_SECRET tHeUlTrAsEcReT
```

- Executar os scripts `/sql/script.sql` e `/sql/populate.sql` nessa ordem para inicializar o banco de dados e adicionar produtos para teste.

- *Atenção*: Para a busca de endereço por CEP funcionar, o aplicativo deve ser acessado via `http` e não `https` 