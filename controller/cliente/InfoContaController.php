<?php
require_once(__DIR__."/../../model/cliente/clienteModel.php");
require_once(__DIR__."/../../model/session/sessionModel.php");
class InfoContaController{

    private $cliente;
    private $endereco;
    private $session;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->session = new Session();
        $this->endereco = new Endereco();

    }

    public function processaRequisicao(){

        $this->session->setToken($_COOKIE['token']);
        $idCliente = $this->session->getClienteIdFromToken();

        $this->cliente->setId($idCliente);
        $infoConta = $this->cliente->getInfoConta();

        console_log($infoConta->getEndereco());

        require "view/conta.php";

    }
}

?>