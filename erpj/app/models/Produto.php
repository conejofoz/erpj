<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author conej
 */

namespace app\models;

use app\core\Model;

class Produto extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getProduto($id) {
        $resultado = array();
        $sql = "SELECT * FROM produto WHERE id_produto = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function lista() {
        $sql = "SELECT * FROM produto";
        $sql = $this->db->query($sql);
        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($valores) {
        try {
            $sql = "INSERT INTO produto SET "
                    . "id_categoria          = :id_categoria, "
                    . "id_subcategoria       = :id_subcategoria, "
                    . "produto               = :produto, "
                    . "unidade               = :unidade, "
                    . "preco_alto            = :preco_alto, "
                    . "preco                 = :preco, "
                    . "eh_lancamento         = :eh_lancamento, "
                    . "eh_promocao           = :eh_promocao, "
                    . "eh_maisvendido        = :eh_maisvendido, "
                    . "ativo                 = :ativo, "
                    . "descricao             = :descricao, "
                    . "peso_correio          = :peso_correio, "
                    . "diametro_correio      = :diametro_correio, "
                    . "comprimento_correio   = :comprimento_correio, "
                    . "largura_correio       = :largura_correio, "
                    . "altura_correio        = :altura_correio ";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id_categoria", $valores->id_categoria);
            $sql->bindValue(":id_subcategoria", $valores->id_subcategoria);
            $sql->bindValue(":produto", $valores->produto);
            $sql->bindValue(":unidade", $valores->unidade);
            $sql->bindValue(":preco_alto", $valores->preco_alto);
            $sql->bindValue(":preco", $valores->preco);
            $sql->bindValue(":eh_lancamento", $valores->eh_lancamento);
            $sql->bindValue(":eh_promocao", $valores->eh_promocao);
            $sql->bindValue(":eh_maisvendido", $valores->eh_maisvendido);
            $sql->bindValue(":ativo", $valores->ativo);
            $sql->bindValue(":descricao", $valores->descricao);
            $sql->bindValue(":peso_correio", $valores->peso_correio);
            $sql->bindValue(":diametro_correio", $valores->diametro_correio);
            $sql->bindValue(":comprimento_correio", $valores->comprimento_correio);
            $sql->bindValue(":largura_correio", $valores->largura_correio);
            $sql->bindValue(":altura_correio", $valores->altura_correio);
            $sql->execute();
            return $this->db->lastInsertId();
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            exit();
        }
    }

    public function editar($id, $produto, $ativo, $menu) {
        $sql = "UPDATE produto SET "
                . "produto = :produto, "
                . "ativo_produto = :ativo, "
                . "mostrar_no_menu = :menu "
                . "WHERE id_produto = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":produto", $produto);
        $qry->bindValue(":ativo", $ativo);
        $qry->bindValue(":menu", $menu);
        $qry->bindValue("id", $id);
        $qry->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM produto WHERE id_produto = :id_produto";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $id);
        $qry->execute();
        if ($qry->rowCount() > 0) {
            return 'ok';
        }
    }

}
