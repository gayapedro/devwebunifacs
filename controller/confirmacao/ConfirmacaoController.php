<?php
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../model/compra/compraModel.php");
require_once(__DIR__."/../../model/processo/processoModel.php");

class ConfirmacaoController{

    public $carrinho;
    public $session;
    public $compra;
    public $processo;

    public function __construct(){
        $this->carrinho = new Carrinho();
        $this->compra = new Compra();
        $this->session = new Session();
        $this->processo = new Processo();
    }

    public function processaRequisicao(){

        $this->carrinho->setToken($_COOKIE['token']);
        $currentCarrinho = $this->carrinho->getCarrinho();

        $this->session->setToken($_COOKIE['token']);
        $idCliente = $this->session->getClienteIdFromToken();

        $this->compra->setIdCarrinho($currentCarrinho['id']);
        $this->compra->setIdUsuario($idCliente);
        $idCompra = $this->compra->getIdCompra();

        $this->carrinho->closeCarrinho();

        $this->processo->setIdCompra($idCompra);
        $this->processo->updateProcess('inicial', 'done');
        $this->processo->updateProcess('preparação', 'doing');

        require "view/confirmacao.php";
    }
}

?>