<?php

/**
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
require_once './../Model/ItensVenda.php';
require_once './../Model/DB.php';

 class ItensVendaController extends ItensVendas
 {
    
    protected $tabela = 'itensVenda';  //define a tabela do banco

      
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
        $sql = "INSERT INTO $this->tabela (idVenda, idProduto, quantidade, valorUnitario) VALUES (:idVenda, :idProduto, :quantidade, :valorUnitario)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idVenda', $this->idVenda);
        $stm->bindParam(':idProduto', $this->idProduto);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':valorUnitario', $this->valorUnitario);

        return $stm->execute();
    }
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela 
        SET  = :valorUnitario = :valorUnitario 
        AND :quantidade = :quantidade
        AND :idVenda = :idVenda
        AND :idProduto = :idProduto 
        WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':idVenda', $this->idVenda);
        $stm->bindParam(':idProduto', $this->idProduto);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':valorUnitario', $this->valorUnitario);
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