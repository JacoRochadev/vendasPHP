<?php

/**
 * contem metodos basicos para criar, deletar, Lê e apagar dadosVenda no BD
 */
require_once './../../Model/Venda.php';
require_once './../../Model/DB.php';

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
    public function insert($dadosVenda) {
        $sql = "INSERT INTO $this->tabela (idcliente, valortotal) VALUES (?, ?)";
        $stm = DB::prepare($sql);
        $stm->bindValue(1, $dadosVenda['idcliente']);
        $stm->bindValue(2, $dadosVenda['valortotal']);

        $stm->execute();
    }
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela 
        SET  = :valorTotal = :valorTotal 
        AND :idcliente = :idcliente
        WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':valorTotal', $this->valorTotal);

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