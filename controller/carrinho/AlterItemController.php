<?php
require_once(__DIR__."/../../model/carrinhoProduto/carrinhoProdutoModel.php");

class AlterItemController{

    public $carrinhoProduto;

    public function __construct(){
        $this->carrinhoProduto = new CarrinhoProduto();
    }

    public function alterItem($id, $cantidad) {

        $this->carrinhoProduto->setId($id);
        $this->carrinhoProduto->setCantidad($cantidad);
        $this->carrinhoProduto->update();

        header('Location:carrinho', true,302);
    }

}
?>