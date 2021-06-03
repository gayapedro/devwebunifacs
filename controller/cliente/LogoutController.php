<?php
require_once(__DIR__."/../../model/session/sessionModel.php");
require_once(__DIR__."/../../utils.php");
class LogoutController{

    private $session;

    public function __construct(){
        $this->session = new Session();
        $this->processaRequisicao();
    }

    public function processaRequisicao(){

        $this->session->setToken($_POST['token']);

        $this->session->deleteSession();

        setcookie('token',"",time()+2592000,"/");
        header('Location:home', true,302);

    }
}
?>
