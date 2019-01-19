<?php

namespace app\models;

use PDOException;
use app\core\Model;


use app\models\Item;
use app\models\Produto;

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
            $data = date('Y-m-d');
            $hora = date('H:i:s');
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

    public function atualizaTotalBanco($totalPedido, $idPedido) {
        try {
            $sql = "UPDATE pedido SET total = :totalPedido WHERE id_pedido = :idPedido";
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":totalPedido", $totalPedido);
            $qry->bindValue(":idPedido", $idPedido);
            $qry->execute();
            return 'ok';
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function finalizarPedido_old_aprovado($listaProdutos) {
        echo 'Finalizando pedido....';
        try {


            $conexao = $this->db;
            $conexao->beginTransaction();

            foreach ($listaProdutos as $valores) {
                $valores = (object) $valores;
                $sql = "INSERT INTO item (id_pedido, id_produto, qtde, valor) VALUES(:id_pedido, :idProduto, :qtde, :valor)";
                $qry = $conexao->prepare($sql);
                $qry->bindValue(":id_pedido", $valores->idPedido);
                $qry->bindValue(":idProduto", $valores->idProduto);
                $qry->bindValue(":qtde", $valores->qtde);
                $qry->bindValue(":valor", $valores->preco);
                if (!$qry->execute()) {
                    die("Erro ao atualizar itens do pedido");
                }
            }

            foreach ($listaProdutos as $item) {
                $item = (object) $item;
                $sql = "UPDATE produto SET qtdex = qtde-:qtde WHERE id_produto = :idProduto";
                $qry = $conexao->prepare($sql);
                $qry->bindValue(":qtde", $item->qtde);
                $qry->bindValue(":idProduto", $item->idProduto);
                $qry->execute();
            }

            $conexao->commit();

            echo 'Pedido Finalizado';
            
        } catch (PDOException $erro) {
            $conexao->rollBack();
            echo json_encode(array(
                "Mensagem:" => $erro->getMessage(),
                "Linha   :" => $erro->getLine(),
                "Arquivo :" => $erro->getFile(),
                "Descrição:" => "Atenção o pedido não foi inserido, houve um erro fatal"
            ));
        }
    }
    
    
    public function finalizarPedido($listaProdutos) {
        try {

            $item = new Item();
            $produto = new Produto();

            $conexao = $this->db;
            $conexao->beginTransaction();

            foreach ($listaProdutos as $valores) {
                $valores = (object) $valores;
                $item->inserir($valores, $conexao);
            }

            foreach ($listaProdutos as $prod) {
                $prod = (object) $prod;
                $produto->baixaEstoque($prod, $conexao);
            }

            $conexao->commit();

            echo 'Pedido Finalizado';
            
        } catch (PDOException $erro) {
            $this->db->rollBack();
            echo json_encode(array(
                "Mensagem:" => $erro->getMessage(),
                "Linha   :" => $erro->getLine(),
                "Arquivo :" => $erro->getFile(),
                "Descrição:" => "Atenção o pedido não foi inserido, houve um erro fatal"
            ));
        }
    }

}
