<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");

class CarrinhoDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function createCarrinho($token){

        $id = guidv4();
        $status = 'active';

        $stmt = $this->mysqli->prepare("INSERT INTO carrinhos (`id`, `token`, `status`, `created_at`, `updated_at`) VALUES (?,?,?, now(), now())");
        $stmt->bind_param("sss",$id, $token, $status);

        $result = $stmt->execute();

        if ($result) {
            return $id;
        } else {
            return false;
        }

    }

    public function fetchCarrinhoByToken($token){

        $sql = "SELECT * FROM carrinhos WHERE token = '$token' AND status = 'active'";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        if (count($array) == 0) {
            return null;
        }

        return $array[0];
    }

    public function inactiveCarrinho($token) {

        $sql = "UPDATE carrinhos SET status = 'inactive', updated_at = NOW() WHERE token = '$token'";

        return $this->mysqli->query($sql);
    }

    public function fecharCarrinho($token) {

        $sql = "UPDATE carrinhos SET status = 'closed', updated_at = NOW() WHERE token = '$token'";

        return $this->mysqli->query($sql);
    }

    public function fetchCarrinhoProducts($id) {

        $sql = "
            SELECT
                p.nome,
                (p.preco - p.preco * p.desconto / 100) as preco,
                p.image_url,
                cp.cantidad,
                cp.id as cp_id
            FROM
                carrinho_produto cp
            INNER JOIN
                produtos p
            ON
                cp.id_produto = p.id
            WHERE
                cp.id_carrinho = '$id'
        ";

        $result = $this->mysqli->query($sql);
        console_log($result);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        if (count($array) == 0) {
            return null;
        }

        return $array;
    }

}
?>