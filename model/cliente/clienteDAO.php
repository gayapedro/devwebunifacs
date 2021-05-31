<?php
require_once("clienteModel.php");

class Cliente extends ClienteModel {

    private $id;
    private $email;
    private $nome;
    private $telefone;
    private $endereco;
    private $senha;
    private $createdAt;
    private $updatedAt;

    // Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }
    public function setCreatedAt($string){
        $this->createdAt = $string;
    }
    public function setUpdatedAt($string){
        $this->updatedAt = $string;
    }

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }
    public function getUpdatedAt(){
        return $this->updatedAt;
    }


    public function incluir(){
        return $this->setCliente($this->getEmail(),$this->getNome(),$this->getTelefone(),$this->getEndereco(),$this->getSenha(),$this->getEmail());
    }
}
?>
