<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");

class CarrinhoProdutoDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function includeCarrinhoProduto($idCarrinho, $idProduto, $cantidad){

        $id = guidv4();

        $stmt = $this->mysqli->prepare("INSERT INTO carrinho_produto (`id`, `id_carrinho`, `id_produto`, `cantidad`) VALUES (?,?,?,?)");
        $stmt->bind_param("sssi",$id, $idCarrinho, $idProduto, $cantidad);

        return $stmt->execute();

    }

    public function alterCarrinhoProduto($id, $cantidad) {

        $sql = "UPDATE carrinho_produto SET cantidad = $cantidad WHERE id = '$id'";

        return $this->mysqli->query($sql);
    }
}
?>