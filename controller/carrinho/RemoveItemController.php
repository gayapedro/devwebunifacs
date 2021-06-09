<?php
require_once(__DIR__."/../../model/carrinhoProduto/carrinhoProdutoModel.php");

class RemoveItemController{

    public $carrinhoProduto;

    public function __construct(){
        $this->carrinhoProduto = new CarrinhoProduto();
    }

    public function removeItem($id) {

        $this->carrinhoProduto->setId($id);
        $this->carrinhoProduto->remove();

        header('Location:carrinho', true,302);
    }

}
?>