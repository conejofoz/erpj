<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Categoria;
use app\models\SubCategoria;

class SubCategoriaController extends Controller {

    public function index() {
        $subcategoria = new SubCategoria();

        $dados["subcategorias"] = $subcategoria->lista();
        $dados["view"] = "Subcategoria/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $categoria = new Categoria();
        $dados["categorias"] = $categoria->lista();
        $dados["view"] = "Subcategoria/Create";
        $this->load("template", $dados);
    }

    public function edit($id = 0) {
        $categoria = new Categoria();
        $subcategoria = new SubCategoria();
        if ($id == 0) {
            header("Location:" . URL_BASE . "subcategoria");
        }

        $achou = $subcategoria->getSubCategoria($id);

        if (!$achou) {
            header("Location: " . URL_BASE . "subcategoria");
        }

        $dados["categorias"] = $categoria->lista();
        $dados["subcategoria"] = $achou;
        $dados["view"] = "Subcategoria/Edit";
        $this->load("template", $dados);
    }

    public function salvar() {
        $subcat = new Subcategoria();
        $id_categoria = isset($_POST["txt_id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "txt_id_categoria")) : NULL;
        $id_subcategoria = isset($_POST["id_subcategoria"]) ? strip_tags(filter_input(INPUT_POST, "id_subcategoria")) : NULL;
        $subcategoria = isset($_POST["txt_subcategoria"]) ? strip_tags(filter_input(INPUT_POST, "txt_subcategoria")) : NULL;
        $ativo = isset($_POST["txt_ativo"]) ? strip_tags(filter_input(INPUT_POST, "txt_ativo")) : NULL;
        
        if($subcategoria == NULL){
            echo 'Campo Subcategoria é obrigatório!';
            exit;
        }

        if ($id_subcategoria) {
            $salvo = $subcat->editar($id_categoria, $id_subcategoria, $subcategoria, $ativo);
            if($salvo > 0){
                $mensagem = "alterado";
            } else{
                $mensagem = "nao_alterado";
            }
        } else {
            $salvo = $subcat->inserir($id_categoria, $subcategoria, $ativo);
            if($salvo > 0){
                $mensagem = "inserido";
            } else{
                $mensagem = "nao_inserido";
            }
        }
        header("Location: " . URL_BASE . "subcategoria?mensagem=" . $mensagem);
    }
    
    
    public function excluir($id = 0){
        $subcategoria = new SubCategoria();
        
        if($id == 0){
            header("Location: " . URL_BASE . "subcategoria");
        }
        
        $umaSubCategoria = $subcategoria->getSubCategoria($id);
        
        if(!$umaSubCategoria){
            header("Location: " .URL_BASE . "subcategoria");
        }
        
        $dados["subcategoria"] = $umaSubCategoria;
        $dados["view"] = "Subcategoria/Delete";
        $this->load("template", $dados);
        
        
        
        
        
        
        
        
        
        //$id_categoria = isset($_POST["id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "id_categoria")) : NULL;
        
    }
    
    public function delete($id){
        $subcategoria = new SubCategoria();
        $retorno = $subcategoria->delete($id);    
        if($retorno=="ok"){
            
            echo '<script>alert("Registro Eliminado")</script>';
            //echo "bababa";
            //exit();
            
            header("Location:" . URL_BASE . "subcategoria");
        }
    
    }

}
