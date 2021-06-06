<?php

require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../model/cliente/clienteModel.php");
require_once(__DIR__."/../../model/endereco/enderecoModel.php");

class EnderecoController{
    private $endereco;
    private $ciente;
    private $session;

    public function __construct(){
        $this->session = new Session();
        $this->endereco = new Endereco();
        $this->cliente = new Cliente();
    }

    public function processaRequisicao(){

        $this->session->setToken($_COOKIE['token']);
        $idCliente = $this->session->getClienteIdFromToken();

        $this->cliente->setId($idCliente);
        $enderecoId = $this->cliente->getEnderecoId();

        $this->endereco->setId($enderecoId);
        $enderecoData = $this->endereco->getById();

        
        require "view/endereco.php";
    }

}

?>