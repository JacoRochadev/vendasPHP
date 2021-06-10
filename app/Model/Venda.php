<?php

class Vendas
{

    private $idVenda;
    private $idCliente;
    private $valorVenda;
    
    public function __construct()
    {

    }
    /**
     * Get the value of idVenda
     */ 
    public function getIdVenda()
    {
        return $this->idVenda;
    }

    /**
     * Set the value of idVenda
     *
     * @return  self
     */ 
    public function setIdVenda($idVenda)
    {
        $this->idVenda = $idVenda;

        return $this;
    }

    /**
     * Get the value of idCliente
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of valorVenda
     */ 
    public function getValorVenda()
    {
        return $this->valorVenda;
    }

    /**
     * Set the value of valorVenda
     *
     * @return  self
     */ 
    public function setValorVenda($valorVenda)
    {
        $this->valorVenda = $valorVenda;

        return $this;
    }
}