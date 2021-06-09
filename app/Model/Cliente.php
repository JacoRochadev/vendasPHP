<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once './../Model/DB.php';    //inclui arquivo DB 

 abstract class CLientes extends DB {   //faz herança do arquivo DB
    
    private $idCliente;
    public $nome;

    public function __construct()
    {
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }
}