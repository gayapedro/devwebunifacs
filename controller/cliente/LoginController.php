<?php
require_once(__DIR__."/../../model/cliente/clienteDAO.php");
require_once(__DIR__."/../../model/endereco/enderecoDAO.php");
require_once(__DIR__."/../../model/session/sessionDAO.php");
require_once(__DIR__."/../../utils.php");
class LoginController{

    private $cliente;
    private $session;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->session = new Session();
        $this->login();
    }

    private function login(){

        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setSenha($_POST['senha']);
        $result = $this->cliente->signIn();

        if ($result != "") {
            $token = bin2hex(random_bytes(40));
            $this->session->setToken($token);
            $this->session->setIdCliente($result);
            $sessionSaved = $this->session->newSession();

            if ($sessionSaved) {
                return json_encode($this->sessiom);
            } else {
                echo "";
            }
        }
        echo "";
    }
}
// new LoginController($_GET['campo']);      // se for um controller que precisa de parametros
new LoginController();

?>
