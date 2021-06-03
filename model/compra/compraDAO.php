<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");

class CompraDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function createCompra(){

        // $id = guidv4();

        // $stmt = $this->mysqli->prepare("INSERT INTO clientes (`id`, `email`, `nome`, `telefone`, `id_endereco`, `senha`, `cpf`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?,?, now(), now())");
        // $stmt->bind_param("sssssss",$id, $email, $nome, $telefone, $endereco, $encSenha, $cpf);

        // return $stmt->execute();

    }

}
?>
