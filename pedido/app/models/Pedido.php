<?php

namespace app\models;

use app\core\Model;

class Pedido extends Model {

    public function listarPedidos($idCliente) {
        //$sql = "SELECT " .utf8_encode("produto")." FROM produto WHERE produto like :nome";
        $sql = "SELECT c.cliente, p.id_pedido, p.id_cliente, p.data_pedido, p.hora_pedido, p.baixado, p.finalizado, p.total "
                . "FROM  cliente c, pedido p "
                . "WHERE c.id_cliente = p.id_cliente AND p.id_cliente = :idCliente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":idCliente", $idCliente);
        $sql->execute();
        $resultado = $sql->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }

    public function getPedidoNaoFinalizado($idCliente) {
        $sql = "SELECT c.cliente, p.id_pedido, p.id_cliente, p.data_pedido, p.hora_pedido, p.baixado, p.finalizado, p.total "
                . "FROM  cliente c, pedido p "
                . "WHERE c.id_cliente = p.id_cliente AND p.id_cliente = :idCliente AND p.finalizado='N'";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":idCliente", $idCliente);
        $sql->execute();
        $resultado = $sql->fetch(\PDO::FETCH_OBJ);
        return $resultado;
    }

    public function novoPedido($idCliente) {

        try {
            $data = date('d/m/Y');
            $hora = date('h:i:s');
            //$sql = "INSERT INTO pedido VALUES(id_cliente, data_pedido, hora_pedido) :idCliente, :data, :hora";
            $sql = "INSERT INTO pedido (id_cliente, data_pedido, hora_pedido) VALUES(:idCliente, :data, :hora)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":idCliente", $idCliente);
            $sql->bindValue(":data", $data);
            $sql->bindValue(":hora", $hora);
            $sql->execute();
            return $this->db->lastInsertId();
        } catch (\PDOException $exc) {
            echo $exc->getMessage();
            exit;
        }
    }

    public function getPedido($idPedido) {
        $sql = "SELECT c.cliente, p.id_pedido, p.id_cliente, p.data_pedido, p.hora_pedido, p.baixado, p.finalizado, p.total "
                . "FROM  cliente c, pedido p "
                . "WHERE p.id_pedido=:idPedido";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":idPedido", $idPedido);
        $sql->execute();
        $resultado = $sql->fetch(\PDO::FETCH_OBJ);
        return $resultado;
    }

}
