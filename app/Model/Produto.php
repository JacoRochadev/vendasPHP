<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once './../../Model/DB.php';    //inclui arquivo DB 

 abstract class Produtos extends DB {   //faz herança do arquivo DB
    
    private $idProduto;
    public $nome;
    public $preco;

    public function __construct()
    {

    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }
}