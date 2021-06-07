<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
class ProdutoInitController{

    private $produto;
    public $carrinho;

    public function __construct(){
        $this->produto = new Produto();
        $this->carrinho = new Carrinho();
    }

    public function processaRequisicao($categoria){

        $this->produto->setCategoria($categoria);
        $cat = $categoria;
        $produtos = $this->produto->getProdutos();
        $categorias = $this->produto->getCategorias();
        $currentCarrinho = [];
        $total = 0;
        $currentCarrinhoProducts = [];

        if (isset($_COOKIE['token'])) {

            $currentCarrinho = $this->getCurrentCarrinho();

            if (!empty($currentCarrinho)) {
                $currentCarrinhoProducts = $this->getCurrentCarrinhoProducts($currentCarrinho['id']);
                $total = $this->getTotal($currentCarrinhoProducts);
            }
        }

        require "view/produtos.php";
    }

    public function getTotal($currentCarrinhoProducts) {
        $total = 0;
        foreach($currentCarrinhoProducts as $item) {
            $total += $item['preco'] * $item['cantidad'];
        }
        return $total;
    }

    public function getCurrentCarrinho() {
        $this->carrinho->setToken(isset($_COOKIE['token']) ? $_COOKIE['token'] : "");
        return $this->carrinho->getCarrinho();
    }

    public function getCurrentCarrinhoProducts($id) {
        $this-> carrinho->setId($id);
        return $this->carrinho->getCarrinhoProducts();
    }

}

?>