<?php
require_once(__DIR__."/../../model/cliente/clienteModel.php");
require_once(__DIR__."/../../model/endereco/enderecoModel.php");
require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../utils.php");
class LoginController{

    private $cliente;
    private $session;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->session = new Session();
    }

    public function processaRequisicao(){
        require "view/login.php";
    }

    public function login(){

        $this->cliente->setEmail($_POST['emailLogin']);
        $this->cliente->setSenha($_POST['senhaLogin']);
        $result = $this->cliente->signIn();

        if ($result != "") {
            $token = bin2hex(random_bytes(40));
            $this->session->setToken($token);
            $this->session->setIdCliente($result);
            $sessionSaved = $this->session->newSession();

            if ($sessionSaved) {
                setcookie('token',"$token",time()+2592000,"/");
                header('Location:home', true,302);
            } else {
                header('Location:login', true,302);
            }
        } else {
            console_log("alert('Usuario ou senha invalidos')");
            header('Location:login', true,302);
        }
    }
}
// new LoginController($_GET['campo']);      // se for um controller que precisa de parametros
new LoginController();

?>
