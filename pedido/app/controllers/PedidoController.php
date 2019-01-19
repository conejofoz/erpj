<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Login;
use app\models\Pedido;
use app\models\Item;
use app\models\Produto;

class PedidoController extends Controller {

    public function index() {

        $login = new Login();
        if ($login->estaLogado() == false) {
            header("Location:" . URL_BASE . "login");
        }

        $pedido = new Pedido();
        $item = new Item();
        $objPedido = $pedido->getPedidoNaoFinalizado($_SESSION["clienteLogado"]->id_cliente);
        if (!$objPedido) {
            $idPedido = $pedido->novoPedido($_SESSION["clienteLogado"]->id_cliente);
            $objPedido = $pedido->getPedido($idPedido);
        }

        //var_dump($objPedido);

        $dados["pedido"] = $objPedido;
        $dados["itens"] = $item->listaItens($objPedido->id_pedido);
        $dados["view"] = "Pedido/Index";
        $this->load("template", $dados);
    }

    public function atualizaTotalBanco() {
        $totalPedido = $_POST["totalPedido"];
        $idPedido = $_POST["idPedido"];

        $retorno = array(
            "resultado" => 0,
            "mensagem" => ""
        );

        $pedido = new Pedido();
        $resultado = $pedido->atualizaTotalBanco($totalPedido, $idPedido);

        if ($resultado == "ok") {
            $retorno["resultado"] = 1;
            $retorno["mensagem"] = "Total no banco atualizado";
        } else {
            $retorno["resultado"] = 0;
            $retorno["mensagem"] = $resultado;
        }
        echo json_encode($retorno);
    }

    public function finalizarPedido_old() {
        //obs: não pode dar print_r, var_dump ou echo pq senão vai pro js...tem que ser só no final com json_encode
        $listaProdutos = $_POST["listaItens"];
        //$listaProdutos = (object) $listaProdutos;

        //print_r($listaProdutos);
        //foreach ($listaProdutos as $produto) {
        // $subTotal = $produto["qtde"] * $produto["preco"];
        // echo $produto["idProduto"] . $produto["qtde"] . $produto["preco"] . $subTotal . "<br>";
        //}
        // //exit;
        //echo json_encode($listaProdutos);
        
        $item = new Item();
        $produto = new Produto();
        foreach ($listaProdutos as $prod) {
            $umProduto = (object)$prod;
            //$item->inserir($umProduto);
            $produto->baixaEstoque($umProduto);
        }
    }
    public function finalizarPedido() {
        $listaProdutos = $_POST["listaItens"];
        $pedido = new Pedido();
        $pedido->finalizarPedido($listaProdutos);
    }

}
