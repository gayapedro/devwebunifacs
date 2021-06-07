<?php
require_once(__DIR__."/../../model/compra/compraModel.php");
class CompraController{

    public $compra;

    public function __construct(){
        $this->compra = new Compra();
    }

    public function addItem(){
        
        // TODO: checkar se existe uma compra linkada ao token atual.
        // se existir, adicionar o produto ao carrinho e atualizar as infos
        // se nao existir, criar uma compra, um carrinho e adicionar o produto.
    }

    public function getCompraInfo(){
        console_log($_POST['idCompra']);
        $this->compra->setId($_POST['idCompra']);
        $compraInfo =  $this->compra->getCompraInfo();

        console_log($compraInfo);

        require "view/detalhepedido.php";
    }

}

?>