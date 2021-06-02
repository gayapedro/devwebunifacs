<?php

class ClienteInfo {

    private $cliente;
    private $compras;

    function __construct($cliente, $compras) {
        $this->cliente = $cliente;
        $this->compras = $compras;
    }

    // Setters
    public function setCliente($cliente){
        $this->id = $cliente;
    }
    public function setComrpas($array){
        $this->email = $array;
    }

    //Getters
    public function getCliente(){
        return $this->cliente;
    }
    public function getCompras(){
        return $this->compras;
    }
}
?>
