<?php

class ItensVendas
{

    private $idItensVenda;
    private $idVenda;
    private $idProduto;
    private $quantidade;
    private $valorUnitario;
    
    public function __construct()
    {
        
    }

    /**
     * Get the value of idItensVenda
     */ 
    public function getIdItensVenda()
    {
        return $this->idItensVenda;
    }

    /**
     * Set the value of idItensVenda
     *
     * @return  self
     */ 
    public function setIdItensVenda($idItensVenda)
    {
        $this->idItensVenda = $idItensVenda;

        return $this;
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
     * Get the value of idProduto
     */ 
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set the value of idProduto
     *
     * @return  self
     */ 
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */ 
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     *
     * @return  self
     */ 
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}