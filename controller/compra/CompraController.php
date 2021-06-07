<?php
require_once(__DIR__."/../../model/compra/compraModel.php");
class CompraController{

    public $compra;

    public function __construct(){
        $this->compra = new Compra();
    }

    public function getCompraInfo(){
        $this->compra->setId($_POST['idCompra']);
        $compraInfo =  $this->compra->getCompraInfo();

        require "view/detalhepedido.php";
    }

    public function rate(){
        $rating = 0;

        for ($x = 1; $x <= 5; $x++) {
            if ($_POST["inlineRadio$x"]) {
                $rating = $x;
            }
        }

        $this->compra->setId($_POST['idCompraModal']);
        $this->compra->setQualificacao($rating);
        $this->compra->rate();
        
        header('Location:conta', true,302);
    }

}

?>