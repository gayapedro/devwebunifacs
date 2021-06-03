<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
require_once(__DIR__."/../endereco/enderecoModel.php");
require_once("clienteInfoModel.php");
class ClienteDAO{

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

    public function getContaInfo($idCliente){

        $sql = "SELECT * FROM clientes WHERE id = '$idCliente'";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        console_log($sql);

        if ($array[0]) {

            $sql2 = "SELECT * FROM compras WHERE id_usuario = '$idCliente'";
            $result2 = $this->mysqli->query($sql2);

            $array2 = [];
            while($row = $result2->fetch_array(MYSQLI_ASSOC)){
                $array2[] = $row;
            }

            $endereco = new Endereco();
            $endereco->setId($array[0]["id_endereco"]);
            $enderecoData = $endereco->getById();

            return new ClienteInfo($array[0], $enderecoData, $array2);
        }

        return null;
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
