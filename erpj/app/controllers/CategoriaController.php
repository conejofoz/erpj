<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Categoria;

class CategoriaController extends Controller {

    public function index() {
        $categoria = new Categoria();

        $dados["categorias"] = $categoria->lista();
        $dados["view"] = "Categoria/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $dados["view"] = "Categoria/Create";
        $this->load("template", $dados);
    }

    public function edit($id = 0) {
        $categoria = new Categoria();
        if ($id == 0) {
            header("Location:" . URL_BASE . "categoria");
        }

        $achou = $categoria->getCategoria($id);

        if (!$achou) {
            header("Location: " . URL_BASE . "categoria");
        }

        $dados["categoria"] = $achou;
        $dados["view"] = "Categoria/Edit";
        $this->load("template", $dados);
    }

    public function salvar() {
        $cat = new Categoria();
        $id_categoria = isset($_POST["id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "id_categoria")) : NULL;
        $categoria = isset($_POST["txt_categoria"]) ? strip_tags(filter_input(INPUT_POST, "txt_categoria")) : NULL;
        $ativo = isset($_POST["txt_ativo"]) ? strip_tags(filter_input(INPUT_POST, "txt_ativo")) : NULL;
        $menu = isset($_POST["txt_menu"]) ? strip_tags(filter_input(INPUT_POST, "txt_menu")) : NULL;

        if ($id_categoria) {
            $salvo = $cat->editar($id_categoria, $categoria, $ativo, $menu);
        } else {
            $salvo = $cat->inserir($categoria, $ativo, $menu);
        }
        header("Location: " . URL_BASE . "categoria");
    }
    
    
    public function excluir($id = 0){
        $categoria = new Categoria();
        
        if($id == 0){
            header("Location: " . URL_BASE . "categoria");
        }
        
        $umaCategoria = $categoria->getCategoria($id);
        
        if(!$umaCategoria){
            header("Location: " .URL_BASE . "categoria");
        }
        
        $dados["categoria"] = $umaCategoria;
        $dados["view"] = "Categoria/Delete";
        $this->load("template", $dados);
        
        
        
        
        
        
        
        
        
        //$id_categoria = isset($_POST["id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "id_categoria")) : NULL;
        
    }
    
    public function delete($id){
        $categoria = new Categoria();
        $retorno = $categoria->delete($id);    
        if($retorno=="ok"){
            
            echo '<script>alert("Registro Eliminado")</script>';
            //echo "bababa";
            //exit();
           // echo 'Registro apagado';
            //sleep(5);

            header("Location:" . URL_BASE . "categoria");
        }
    
    }

}
