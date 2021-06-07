<?php
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
class CarrinhoController{

    public $carrinho;

    public function __construct(){
        $this->carrinho = new Carrinho();
    }

    public function processaRequisicao(){

        $currentCarrinho = $this->getCurrentCarrinho();
        $total = 0;
        $currentCarrinhoProducts = [];

        if (!empty($currentCarrinho)) {
            $currentCarrinhoProducts = $this->getCurrentCarrinhoProducts($currentCarrinho['id']);
            $total = $this->getTotal($currentCarrinhoProducts);
        }

        require "view/carrinho.php";
    }

    public function getTotal($currentCarrinhoProducts) {
        $total = 0;
        foreach($currentCarrinhoProducts as $item) {
            $total += $item['preco'] * $item['cantidad'];
        }
        return $total;
    }

    public function getCurrentCarrinho() {
        $this->carrinho->setToken($_COOKIE['token']);
        return $this->carrinho->getCarrinho();
    }

    public function getCurrentCarrinhoProducts($id) {
        $this-> carrinho->setId($id);
        return $this->carrinho->getCarrinhoProducts();
    }

    public function addItem() {
        header('Location:home', true,302);
    }

}

?>