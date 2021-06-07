<?php
require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../model/carrinho/carrinhoModel.php");
require_once(__DIR__."/../../utils.php");
class LogoutController{

    private $session;
    public $carrinho;

    public function __construct(){
        $this->session = new Session();
        $this->carrinho = new Carrinho();
    }

    public function processaRequisicao(){

        $this->carrinho->setToken($_COOKIE['token']);
        $this->session->setToken($_COOKIE['token']);

        $this->session->deleteSession();
        $this->carrinho->deleteCarrinho();

        setcookie('token',"",time()+2592000,"/");
        header('Location:home', true,302);

    }
}
?>
