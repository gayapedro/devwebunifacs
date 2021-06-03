<?php
require_once(__DIR__."/../../model/cliente/clienteModel.php");
require_once(__DIR__."/../../model/session/sessionModel.php");
class InfoContaController{

    private $cliente;
    private $session;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->session = new Session();

    }

    public function processaRequisicao(){

        $this->session->setToken($_POST['token']);
        $idCliente = $this->session->getClienteIdFromToken();

        $this->cliente->setId($idCliente);
        $infoConta = $this->cliente->getInfoConta();

        require "view/conta.php";

    }
}

?>