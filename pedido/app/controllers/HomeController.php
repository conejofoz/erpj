<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;
use app\models\Pedido;

class HomeController extends Controller{
    
   public function index(){
       
       $login = new Login();
       if($login->estaLogado()==false){
           header("Location:" . URL_BASE . "login" );
       }
       
       $pedido = new Pedido();
       $dados["pedidos"] = $pedido->listarPedidos($_SESSION['clienteLogado']->id_cliente);
               
       
       $dados["view"] = "home";
       $this->load("template", $dados);
   } 
}
