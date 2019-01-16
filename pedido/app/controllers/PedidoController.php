<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;
use app\models\Pedido;
use app\models\Item;


class PedidoController extends Controller{
    
   public function index(){
       
       $login = new Login();
       if($login->estaLogado()==false){
           header("Location:" . URL_BASE . "login" );
       }
       
       $pedido = new Pedido();
       $item = new Item();
       $objPedido = $pedido->getPedidoNaoFinalizado($_SESSION["clienteLogado"]->id_cliente);
       if(!$objPedido){
           $idPedido = $pedido->novoPedido($_SESSION["clienteLogado"]->id_cliente);
           $objPedido = $pedido->getPedido($idPedido);
       } 
       
       //var_dump($objPedido);
       
       $dados["pedido"] = $objPedido;
       $dados["itens"] = $item->listaItens($objPedido->id_pedido);
       $dados["view"] = "Pedido/Index";
       $this->load("template", $dados);
   } 
   
   
   
   public function atualizaTotalBanco(){
       $totalPedido = $_POST["totalPedido"];
       $idPedido = $_POST["idPedido"];
       
       $retorno = array(
            "resultado" => 0,
            "mensagem" => ""
        );
       
       $pedido = new Pedido();
       $resultado = $pedido->atualizaTotalBanco($totalPedido, $idPedido); 
       
       if($resultado == "ok"){
           $retorno["resultado"] = 1;
           $retorno["mensagem"] = "Total no banco atualizado";
       } else {
           $retorno["resultado"] = 0;
           $retorno["mensagem"] = $resultado;
           
       }
       echo json_encode($retorno);
   }
}
