<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
class CarrinhoController{

    public function __construct(){}

    public function processaRequisicao(){
        require "view/carrinho.php";
    }

}

?>