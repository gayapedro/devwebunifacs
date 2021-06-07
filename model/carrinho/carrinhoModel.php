<?php
require_once("carrinhoDAO.php");

class Carrinho extends CarrinhoDAO
{

    private $id;
    private $token;
    private $status;
    private $created_at;
    private $updated_at;

    // Setters
    public function setId($string)
    {
        $this->id = $string;
    }
    public function setToken($string)
    {
        $this->token = $string;
    }
    public function setStatus($string)
    {
        $this->status = $string;
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
    public function getToken()
    {
        return $this->token;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function getStatus()
    {
        return $this->status;
    }


    public function criarCarrinho()
    {
        return $this->createCarrinho($this->getToken());
    }

    public function getCarrinho()
    {
        return $this->fetchCarrinhoByToken($this->getToken());
    }

    public function getCarrinhoProducts()
    {
        return $this->fetchCarrinhoProducts($this->getId());
    }

    public function deleteCarrinho(){
        return $this->inactiveCarrinho($this->getToken());
    }

    public function closeCarrinho()
    {
        return $this->fecharCarrinho($this->getToken());
    }
}
