<?php

namespace app\models;

use app\core\Model;

class Produto extends Model {

    public function pesquisaPorNome($nome) {
        //$sql = "SELECT " .utf8_encode("produto")." FROM produto WHERE produto like :nome";
        $sql = "SELECT * FROM produto WHERE produto like :nome";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", "%" . $nome . "%");
        $sql->execute();
        $resultado = $sql->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }

    //public function baixaEstoque($item) {
    public function baixaEstoque($item, $conexao) {
       // try {
            $sql = "UPDATE produto SET qtde = qtde-:qtde WHERE id_produto = :idProduto";
            //$qry = $this->db->prepare($sql);
            $qry = $conexao->prepare($sql);
            $qry->bindValue(":qtde", $item->qtde);
            $qry->bindValue(":idProduto", $item->idProduto);
            $qry->execute();
       // } catch (\PDOException $exc) {
       //     echo $exc->getMessage();
       //     exit;
       // }
    }

}
