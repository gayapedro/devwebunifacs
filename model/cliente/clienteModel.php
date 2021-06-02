<?php
require_once("clienteDAO.php");

class Cliente extends ClienteDAO {

    private $id;
    private $email;
    private $nome;
    private $telefone;
    private $endereco;
    private $senha;
    private $cpf;
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
    public function setCPF($string){
        $this->cpf = $string;
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
    public function getCPF(){
        return $this->cpf;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }
    public function getUpdatedAt(){
        return $this->updatedAt;
    }


    public function incluir(){
        return $this->setCliente($this->getEmail(),$this->getNome(),$this->getTelefone(),$this->getEndereco(),$this->getSenha(),$this->getCPF());
    }

    public function signIn(){
        return $this->login($this->getEmail(), $this->getSenha());
    }

    public function getInfoConta(){
        return $this->getContaInfo($this->getId());
    }
}
?>
