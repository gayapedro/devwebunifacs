<?php
require_once("compraDAO.php");

class Compra extends CompraDAO
{

    private $id;
    private $id_usuario;
    private $id_endereco_compra;
    private $id_carrinho;
    private $qualificacao;
    private $created_at;
    private $updated_at;

    // Setters
    public function setId($string)
    {
        $this->id = $string;
    }
    // TODO: ADD SETTERS

    //Getters
    public function getId()
    {
        return $this->id;
    }
    // TODO: ADD GETTERS


    public function criarCompra()
    {
        return $this->createCompra();
    }
}
