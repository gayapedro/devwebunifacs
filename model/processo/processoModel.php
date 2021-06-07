<?php
require_once("processoDAO.php");

class Processo extends ProcessoDAO
{

    private $id;
    private $id_compra;
    private $status;
    private $stage;
    private $id_responsavel;
    private $created_at;
    private $updated_at;

    // Setters
    public function setId($string)
    {
        $this->id = $string;
    }
    public function setIdCompra($string)
    {
        $this->id_compra = $string;
    }
    public function setStatus($string)
    {
        $this->status = $string;
    }
    public function setStage($string)
    {
        $this->stage = $string;
    }
    public function setIdResponsavel($string)
    {
        $this->id_responsavel = $string;
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
    public function getIdCompra()
    {
        return $this->id_compra;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getStage()
    {
        return $this->stage;
    }
    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function startProcesses()
    {
        return $this->initProcesses($this->getIdCompra());
    }

    public function updateProcess($stage, $status)
    {
        return $this->alterProcess($this->getIdCompra(), $stage, $status);
    }

    public function getProcessos($idCompra)
    {
        return $this->fetchProcessos($idCompra);
    }
}
