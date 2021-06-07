<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
require_once(__DIR__."/../carrinho/carrinhoModel.php");
require_once(__DIR__."/../processo/processoModel.php");

class CompraDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function createCompra($idEndereco, $idCarrinho, $idUsuario){

        $id = guidv4();
        $qualificacao = null;

        $stmt = $this->mysqli->prepare("INSERT INTO compras (`id`, `id_usuario`, `id_endereco_compra`, `id_carrinho`, `qualificacao`, `created_at`, `updated_at`) VALUES (?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssss",$id, $idUsuario, $idEndereco, $idCarrinho, $qualificacao);

        $stmt->execute();

        return $id;

    }

    public function getIdCompraBy($idUsuario, $idCarrinho) {
        $sql = "
            SELECT compras.id 
            FROM compras 
            INNER JOIN processos ON compras.id = processos.id_compra
            WHERE id_usuario = '$idUsuario' 
            AND id_carrinho = '$idCarrinho'
            AND processos.stage = 'inicial'
            AND processos.status = 'doing'
        ";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return count($array) > 0 ? $array[0]['id'] : false;
    }

    public function rating($id, $qualificacao) {
        $sql = "UPDATE compras SET qualificacao = $qualificacao WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function compraInfo($id) {
        $sql = "SELECT * FROM compras WHERE id = '$id'";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        $carrinho = new Carrinho();
        $carrinho->setId($array[0]['id_carrinho']);
        $products = $carrinho->getCarrinhoProducts();

        $total = 0;
        foreach($products as $item) {
            $total += $item['preco'] * $item['cantidad'];
        }

        $array[0]['products'] = $products;
        $array[0]['total'] = $total;

        $processo = new Processo();
        $array[0]['processos'] = $processo->getProcessos($array[0]['id']);

        return $array[0];
    }

}
?>
