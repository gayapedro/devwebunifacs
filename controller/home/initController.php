<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
class HomeInitController{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao(){

        $produtos = $this->produto->getProdutosDesconto();

        require "view/home.php";
    }

}

?>