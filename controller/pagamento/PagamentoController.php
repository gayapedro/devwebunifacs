<?php
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
require_once(__DIR__."/../../model/compra/compraModel.php");
require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../model/endereco/enderecoModel.php");
require_once(__DIR__."/../../model/cliente/clienteModel.php");
require_once(__DIR__."/../../model/processo/processoModel.php");
class PagamentoController{

    public $carrinho;
    public $compra;
    public $session;
    private $endereco;
    private $cliente;
    private $processo;

    public function __construct(){
        $this->carrinho = new Carrinho();
        $this->compra = new Compra();
        $this->session = new Session();
        $this->endereco = new Endereco();
        $this->cliente = new Cliente();
        $this->processo = new Processo();
    }

    public function processaRequisicao(){

        $this->session->setToken($_COOKIE['token']);
        $idCliente = $this->session->getClienteIdFromToken();
        $enderecoId = null;

        if ($_POST['endereco'] == "cadastrado") {
            $this->cliente->setId($idCliente);
            $enderecoId = $this->cliente->getEnderecoId();

        } else {

            $this->endereco->setCEP($_POST['cep']);
            $this->endereco->setLogradouro($_POST['logradouro']);
            $this->endereco->setNumero($_POST['numerinho']);
            $this->endereco->setCidade($_POST['cidade']);
            $this->endereco->setUF($_POST['estado']);
            $this->endereco->setComplemento($_POST['complemento']);

            $enderecoId = $this->endereco->incluir($_POST['numerinho'], $_POST['cidade'], $_POST['estado'], $_POST['complemento'], $_POST['cep'], $_POST['logradouro']);
        }

        // criar compra linkada a carrinho
        $this->carrinho->setToken($_COOKIE['token']);
        $currentCarrinho = $this->carrinho->getCarrinho();

        $this->compra->setIdEnderecoCompra($enderecoId);
        $this->compra->setIdCarrinho($currentCarrinho['id']);
        $this->compra->setIdUsuario($idCliente);

        console_log("11111111");

        $idCompra = $this->compra->getIdCompra();


        console_log($idCompra);

        if (!$idCompra) {
            $idCompra = $this->compra->criarCompra();
        }

        $this->processo->setIdCompra($idCompra);
        $this->processo->startProcesses();

        require "view/pagamento.php";
    }
}

?>