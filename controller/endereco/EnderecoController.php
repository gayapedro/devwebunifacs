<?php
require_once(__DIR__."/../../model/produto/produtoModel.php");
class EnderecoController{

    public function __construct(){
    }

    public function processaRequisicao(){
        require "view/endereco.php";
    }

}

?>