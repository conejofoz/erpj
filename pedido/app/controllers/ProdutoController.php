<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

class ProdutoController extends Controller{
    
   public function index(){}
       
   public function pesquisa(){
       $nome = $_POST["q"];
       $produto = new Produto();
       $listaProdutos = $produto->pesquisaPorNome($nome);

       $totalItens =  count($listaProdutos);
       
       for($i=0; $i<$totalItens; $i++){
           $listaProdutos[$i]->produto = utf8_encode($listaProdutos[$i]->produto);
       }
       
       echo json_encode($listaProdutos);
   }
   
   
   
}
