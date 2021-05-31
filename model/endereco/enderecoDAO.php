<?php
require_once("enderecoModel.php");

class Endereco extends enderecoModel {

    private $id;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $complemento;

    // Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setNumero($integer){
        $this->numero = $integer;
    }
    public function setBairro($string){
        $this->bairro = $string;
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

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getBairro(){
        return $this->bairro;
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


    public function incluir(){
        return $this->setEndereco($this->getNumero(),$this->getBairro(),$this->getCidade(),$this->getUF(),$this->getComplemento());
    }
}
