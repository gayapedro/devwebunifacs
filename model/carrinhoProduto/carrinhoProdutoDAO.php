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

    public function deleteCarrinhoProduto($id) {

        $sql1 = "SELECT id_carrinho FROM carrinho_produto WHERE id = '$id'";

        $result =  $this->mysqli->query($sql1);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        $idCarrinho = $array[0]['id_carrinho'];

        $sql2 = "SELECT count(*) as produtos FROM carrinho_produto WHERE id_carrinho = '$idCarrinho'";

        $result2 =  $this->mysqli->query($sql2);

        $array2 = [];
        while($row = $result2->fetch_array(MYSQLI_ASSOC)){
            $array2[] = $row;
        }

        $quantidadeDeProdutos = $array2[0]['produtos'];

        $sql = "DELETE FROM carrinho_produto WHERE id = '$id'";
        $this->mysqli->query($sql);

        console_log($quantidadeDeProdutos);

        if ((int)$quantidadeDeProdutos == 1) {
            $sql3 = "UPDATE carrinhos SET status = 'inactive' WHERE id = '$idCarrinho'";
            $this->mysqli->query($sql3);
        }
    }
}
?>