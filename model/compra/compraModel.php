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
    public function setIdEnderecoCompra($string)
    {
        $this->id_endereco_compra = $string;
    }
    public function setIdCarrinho($string)
    {
        $this->id_carrinho = $string;
    }
    public function setIdUsuario($string)
    {
        $this->id_usuario = $string;
    }
    public function setQualificacao($string)
    {
        $this->qualificacao = $string;
    }
    public function setCreatedAt($string)
    {
        $this->created_at = $string;
    }
    public function setUpdatedAt($string)
    {
        $this->updated_at = $string;
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }
    public function getIdEnderecoCompra()
    {
        return $this->id_endereco_compra;
    }
    public function getIdCarrinho()
    {
        return $this->id_carrinho;
    }
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
    public function getQualificacao()
    {
        return $this->qualificacao;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function criarCompra()
    {
        return $this->createCompra($this->getIdEnderecoCompra(), $this->getIdCarrinho(), $this->getIdUsuario());
    }

    public function getCompraInfo()
    {
        return $this->compraInfo($this->getId());
    }

    public function getIdCompra()
    {
        return $this->getIdCompraBy($this->getIdUsuario(), $this->getIdCarrinho());
    }
}
