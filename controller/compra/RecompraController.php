<?php
require_once(__DIR__."/../../model/compra/compraModel.php");
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
require_once(__DIR__."/../../model/carrinhoProduto/carrinhoProdutoModel.php");
class RecompraController{

    public $compra;
    public $carrinho;
    public $carrinhoProduto;

    public function __construct(){
        $this->compra = new Compra();
        $this->carrinho = new Carrinho();
        $this->carrinhoProduto = new CarrinhoProduto();
    }

    public function recompra( $idCompra ){

        // obter info compra
        $this->compra->setId($idCompra);
        $compraInfo =  $this->compra->getCompraInfo();

        $this->carrinho->setToken($_COOKIE['token']);
        $currentCarrinho = $this->carrinho->getCarrinho();

        if (!empty($currentCarrinho)) {
            $this->carrinho->closeCarrinho();
        }

        $newCarrinho = $this->carrinho->criarCarrinho();

        foreach($compraInfo['products'] as $product) {
            $this->carrinhoProduto->setIdCarrinho($newCarrinho);
            $this->carrinhoProduto->setIdProduto($product['p_id']);
            $this->carrinhoProduto->setCantidad($product['cantidad']);
            $this->carrinhoProduto->include();
        }

        header('Location:carrinho', true,302);
    }

}

?>