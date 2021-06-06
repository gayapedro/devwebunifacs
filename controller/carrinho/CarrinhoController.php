<?php
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
class CarrinhoController{

    public $carrinho;

    public function __construct(){
        $this->carrinho = new Carrinho();
    }

    public function processaRequisicao(){

        $this->carrinho->setToken($_COOKIE['token']);
        $currentCarrinho = $this->carrinho->getCarrinho();
        $this-> carrinho->setId($currentCarrinho['id']);
        $currentCarrinhoProducts = $this->carrinho->getCarrinhoProducts();

        $total = 0;
        foreach($currentCarrinhoProducts as $item) {
            $total += $item['preco'] * $item['cantidad'];
        }

        require "view/carrinho.php";
    }

    public function addItem() {
        // check if carrinho exists
        // 
    }

}

?>