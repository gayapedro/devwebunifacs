<?php
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
require_once(__DIR__."/../../model/carrinhoProduto/carrinhoProdutoModel.php");

class AddItemController{

    public $carrinho;
    public $carrinhoProduto;

    public function __construct(){
        $this->carrinho = new Carrinho();
        $this->carrinhoProduto = new CarrinhoProduto();
    }

    public function addItem() {

        $this->carrinho->setToken($_COOKIE['token']);
        $currentCarrinho = $this->carrinho->getCarrinho();

        if (empty($currentCarrinho)) {

            $newCarrinho = $this->carrinho->criarCarrinho();
            
        console_log($newCarrinho);

            $this->carrinhoProduto->setIdCarrinho($newCarrinho);
            $this->carrinhoProduto->setIdProduto($_POST['idProduto']);
            $this->carrinhoProduto->setCantidad($_POST['quantidade']);
            $this->carrinhoProduto->include();
        } else {
            $this->carrinhoProduto->setIdCarrinho($currentCarrinho['id']);
            $this->carrinhoProduto->setIdProduto($_POST['idProduto']);
            $this->carrinhoProduto->setCantidad($_POST['quantidade']);
            $this->carrinhoProduto->include();
        }

        // return true;

        header('Location:carrinho', true,302);
    }

}
?>