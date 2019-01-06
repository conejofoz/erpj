<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;

class PedidoController extends Controller{
    
   public function index(){
       
       $login = new Login();
       if($login->estaLogado()==false){
           header("Location:" . URL_BASE . "login" );
       }
               
       
       $dados["view"] = "Pedido/Index";
       $this->load("template", $dados);
   } 
}
