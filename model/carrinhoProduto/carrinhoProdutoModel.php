<?php
require_once("carrinhoProdutoDAO.php");

class CarrinhoProduto extends CarrinhoProdutoDAO
{

    private $id;
    private $id_carrinho;
    private $id_produto;
    private $cantidad;

    // Setters
    public function setId($string)
    {
        $this->id = $string;
    }
    public function setIdCarrinho($string)
    {
        $this->id_carrinho = $string;
    }
    public function setIdProduto($string)
    {
        $this->id_produto = $string;
    }
    public function setCantidad($string)
    {
        $this->cantidad = $string;
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }
    public function getIdCarrinho()
    {
        return $this->id_carrinho;
    }
    public function getIdProduto()
    {
        return $this->id_produto;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }


    public function include()
    {
        return $this->includeCarrinhoProduto($this->getIdCarrinho(), $this->getIdProduto(), $this->getCantidad());
    }

    public function update()
    {
        return $this->alterCarrinhoProduto($this->getId(), $this->getCantidad());
    }
}
