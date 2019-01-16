<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Login;
use app\models\Pedido;
use app\models\Item;

class ItemController extends Controller {

    public function inserir() {
        $id_pedido = $_POST["id_pedido"];
        $id_produto = $_POST["id_produto"];
        $qtde = $_POST["qtde"];
        $preco = $_POST["preco"];

        $retorno = array(
            "resultado" => 0,
            "mensagem" => ""
        );

        if ($preco == 0) {
            $retorno["resultado"] = 0;
            $retorno["mensagem"] = "Esse produto está sem preço!";
            echo json_encode($retorno);
            exit;
        }

        if ($qtde == 0) {
            $retorno["resultado"] = 0;
            $retorno["mensagem"] = "Informe a quantidade!";
            echo json_encode($retorno);
            exit;
        }

        $valores = (object) array(
                    "id_pedido" => $id_pedido,
                    "id_produto" => $id_produto,
                    "qtde" => $qtde,
                    "preco" => $preco
        );



        $objItem = new Item();
        $id_item = $objItem->inserir($valores);


        if ($id_item > 0) {
            $retorno["resultado"] = $id_item;
            $retorno["mensagem"] = "Registro Inserido";
            echo json_encode($retorno);
        }
    }

    public function excluir($idPedido, $idProduto) {
        $item = new Item();
        $resultado = $item->excluir($idPedido, $idProduto);
        echo json_encode($resultado);
    }

    public function atualizaQtdeBanco() {
        $idPedido = $_POST["idPedido"];
        $idProduto = $_POST["idProduto"];
        $qtde = $_POST["qtde"];

        $retorno = array(
            "resultado" => 0,
            "mensagem" => ""
        );

        if ($idPedido == '0') {
            $retorno["resultado"] = 0;
            $retorno["Mensagem"] = "Informe o numerodo pedido";
            echo json_encode($retorno);
            exit;
        }


        $item = new Item();
        $resultado = $item->atualizaQtdeBanco($idPedido, $idProduto, $qtde);
        if ($resultado == "ok") {
            $retorno["resultado"] = 1;
            $retorno["Mensagem"] = "Quantidade atualizada";
            echo json_encode($retorno);
        } else {
            $retorno["resultado"] = 0;
            $retorno["Mensagem"] = "Erro ! quantidade não atulizada";
            echo json_encode($retorno);
        }
    }

}
