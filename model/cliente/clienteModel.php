<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
require_once(__DIR__."/../endereco/enderecoDAO.php");
class ClienteModel{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($email, $nome, $telefone, $endereco, $senha){

        $id = guidv4();
        $encSenha = password_hash($senha, PASSWORD_BCRYPT);

        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`id`, `email`, `nome`, `telefone`, `id_endereco`, `senha`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("ssssss",$id, $email, $nome, $telefone, $endereco, $encSenha);

        return $stmt->execute();

    }

    public function getClientes(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    // public function getClienteById(){
    //     $result = $this->mysqli->query("SELECT * FROM livros");
    //     $array = [];
    //     while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //         $array[] = $row;
    //     }
    //     return $array;

    // }

    // public function getClienteByNome(){
    //     $result = $this->mysqli->query("SELECT * FROM livros");
    //     $array = [];
    //     while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //         $array[] = $row;
    //     }
    //     return $array;

    // }

    // function login
}
?>
