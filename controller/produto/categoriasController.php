<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
class CategoriasController{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function getCategorias(){
        return $this->produto->getCategorias();
    }

    public function getCategoriasNormalized(){
        $cats = $this->produto->getCategorias();
        $catsNorm = [];
        foreach($cats as $cat) {
            array_push($catsNorm, strtolower($cat['categoria']));
        }

        return $catsNorm;
    }

}

?>