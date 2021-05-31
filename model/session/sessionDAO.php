<?php
require_once("sessionModel.php");

class Session extends SessionModel {

    private $id;
    private $idCliente;
    private $token;
    private $createdAt;

    // Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setIdCliente($string){
        $this->idCliente = $string;
    }
    public function setToken($string){
        $this->token = $string;
    }
    public function setCreatedAt($string){
        $this->createdAt = $string;
    }

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getToken(){
        return $this->token;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function newSession(){
        return $this->createSession($this->getIdCliente(),$this->getToken());
    }

    public function checkSession(){
        return $this->validateSession($this->getIdCliente(),$this->getToken());
    }
}
?>