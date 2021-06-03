<?php

class ClienteInfo {

    private $cliente;
    private $endereco;
    private $compras;

    function __construct($cliente, $endereco, $compras) {
        $this->cliente = $cliente;
        $this->endereco = $endereco;
        $this->compras = $compras;
    }

    // Setters
    public function setCliente($cliente){
        $this->id = $cliente;
    }
    public function setComrpas($array){
        $this->email = $array;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    //Getters
    public function getCliente(){
        return $this->cliente;
    }
    public function getCompras(){
        return $this->compras;
    }
    public function getEndereco(){
        return $this->endereco;
    }
}
?>
