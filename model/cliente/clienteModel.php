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

    public function setCliente($email, $nome, $telefone, $endereco, $senha, $cpf){

        $id = guidv4();
        $encSenha = password_hash($senha, PASSWORD_BCRYPT);

        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`id`, `email`, `nome`, `telefone`, `id_endereco`, `senha`, `cpf`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssssss",$id, $email, $nome, $telefone, $endereco, $encSenha, $cpf);

        return $stmt->execute();

    }

    public function login($email, $senha) {

        $sql = "SELECT * FROM clientes WHERE email = '$email'";
        $result = $this->mysqli->query($sql);

        if (!$result){
            return false;
        }

        $row = $result->fetch_assoc();
        $verify = password_verify($senha, $row['senha']);

        if ($verify) {
            return $row['id'];
        }

        return "";

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
