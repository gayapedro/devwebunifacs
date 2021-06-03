<?php
require_once("produtoDAO.php");

class Produto extends produtoDAO
{

    private $id;
    private $nome;
    private $preco;
    private $categoria;
    private $desconto;
    private $image_url;
    private $created_at;

    // Setters
    public function setId($string)
    {
        $this->id = $string;
    }
    public function setNome($string)
    {
        $this->nome = $string;
    }
    public function setPreco($number)
    {
        $this->preco = $number;
    }
    public function setCategoria($string)
    {
        $this->categoria = $string;
    }
    public function setDesconto($number)
    {
        $this->desconto = $number;
    }
    public function setImageUrl($string)
    {
        $this->image_url = $string;
    }
    public function setCreatedAt($string)
    {
        $this->created_at = $string;
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getDesconto()
    {
        return $this->desconto;
    }
    public function getImageUrl()
    {
        return $this->image_url;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public function getProdutosDesconto()
    {
        return $this->getProdutosDesc();
    }

    public function getProdutos()
    {
        return $this->getProdutosPorCategoria($this->getCategoria());
    }

    public function getCategorias()
    {
        return $this->getCategoriasList();
    }
}
