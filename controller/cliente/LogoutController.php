<?php
require_once(__DIR__."/../../model/session/sessionDAO.php");
require_once(__DIR__."/../../utils.php");
class LogoutController{

    private $session;

    public function __construct(){
        $this->session = new Session();
        $this->logout();
    }

    private function logout(){

        $this->session->setToken($_POST['token']);

        $this->session->deleteSession();

        setcookie('token',"",time()+2592000,"/");

    }
}
// new LoginController($_GET['campo']);      // se for um controller que precisa de parametros
new LogoutController();

?>
