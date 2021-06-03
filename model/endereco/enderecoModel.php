<?php
require_once("enderecoDAO.php");

class Endereco extends enderecoDAO {

    private $id;
    private $numero;
    private $cidade;
    private $uf;
    private $complemento;
    private $cep;
    private $logradouro;

    // Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setNumero($string){
        $this->numero = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setUF($string){
        $this->uf = $string;
    }
    public function setComplemento($string){
        $this->complemento = $string;
    }
    public function setCEP($string){
        $this->cep = $string;
    }
    public function setLogradouro($string){
        $this->logradouro = $string;
    }

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getUF(){
        return $this->uf;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getCEP(){
        return $this->cep;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }


    public function incluir(){
        return $this->setEndereco($this->getNumero(),$this->getCidade(),$this->getUF(),$this->getComplemento(),$this->getCEP(),$this->getLogradouro());
    }

    public function getById() {
        return $this->getEnderecoById($this->getId());
    }
}
