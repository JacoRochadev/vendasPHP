<?php

/**
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
require_once './../Model/Venda.php';
require_once './../Model/DB.php';

 class VendasController extends Vendas
 {
    
    protected $tabela = 'vendas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (idCliente, valorVenda) VALUES (:idCliente, :valorVenda)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idCliente', $this->idCliente);
        $stm->bindParam(':valorVenda', $this->valorVenda);

        return $stm->execute();
    }
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela 
        SET  = :valorVenda = :valorVenda 
        AND :idCliente = :idCliente
        WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':idCliente', $this->idCliente);
        $stm->bindParam(':valorVenda', $this->valorVenda);

        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}