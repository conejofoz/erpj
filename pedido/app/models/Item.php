<?php

namespace app\models;

use app\core\Model;

class Item extends Model {

    public function listaItens($idPedido) {
        try {
            $sql = "SELECT * FROM item i, produto p WHERE i.id_pedido=:idPedido AND i.id_produto = p.id_produto ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":idPedido", $idPedido);
            $sql->execute();
            $resultado = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $resultado;
        } catch (\PDOException $ex) {
            echo 'Erro: ' . $ex->getMessage();
            exit;
        }
    }
    
    
    public function inserir($valores){
        $sql = "INSERT INTO item (id_pedido, id_produto, qtde, valor) VALUES(:id_pedido, :idProduto, :qtde, :valor)";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_pedido", $valores->id_pedido);
        $qry->bindValue(":idProduto", $valores->id_produto);
        $qry->bindValue(":qtde", $valores->qtde);
        $qry->bindValue(":valor", $valores->preco);
        $qry->execute();
        $resultado = $this->db->lastInsertId();
        return $resultado;
    }
    
    
    public function excluir($idPedido, $idProduto){
        $sql = "DELETE FROM item WHERE id_pedido=:idPedido AND id_produto = :idProduto ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":idPedido", $idPedido);
        $qry->bindValue(":idProduto", $idProduto);
        $qry->execute();
    }
    
    
    public function atualizaQtdeBanco($idPedido,$idProduto,$qtde){
        $sql = "UPDATE item SET qtde = :qtde WHERE id_pedido = :idPedido AND id_produto = :idProduto";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":qtde", $qtde);
        $qry->bindValue(":idPedido", $idPedido);
        $qry->bindValue(":idProduto", $idProduto);
        if ($qry->execute()){
            return 'ok';
        } else {
            return 'erro';
        }
    }

}
