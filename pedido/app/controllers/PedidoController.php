<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;
use app\models\Pedido;


class PedidoController extends Controller{
    
   public function index(){
       
       $login = new Login();
       if($login->estaLogado()==false){
           header("Location:" . URL_BASE . "login" );
       }
       
       $pedido = new Pedido();
       $objPedido = $pedido->getPedidoNaoFinalizado($_SESSION["clienteLogado"]->id_cliente);
       if(!$objPedido){
           $idPedido = $pedido->novoPedido($_SESSION["clienteLogado"]->id_cliente);
           $objPedido = $pedido->getPedido($idPedido);
       } 
               
       
       $dados["pedido"] = $objPedido;
       $dados["itens"] = $pedido->lista($objPedido->id_pedido);
       $dados["view"] = "Pedido/Index";
       $this->load("template", $dados);
   } 
}
