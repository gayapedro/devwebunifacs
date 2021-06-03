<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
class ProdutoInitController{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao($categoria){

        $this->produto->setCategoria($categoria);
        $cat = $categoria;
        $produtos = $this->produto->getProdutos();
        $categorias = $this->produto->getCategorias();

        require "view/produtos.php";
    }

}

?>