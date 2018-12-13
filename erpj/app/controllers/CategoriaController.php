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

    public function salvar() {
        $cat = new Categoria();
        $categoria = isset($_POST["txt_categoria"]) ? strip_tags(filter_input(INPUT_POST, "txt_categoria")) : NULL;
        $ativo = isset($_POST["txt_ativo"]) ? strip_tags(filter_input(INPUT_POST, "txt_ativo")) : NULL;
        $menu = isset($_POST["txt_menu"]) ? strip_tags(filter_input(INPUT_POST, "txt_menu")) : NULL;
        $salvo = $cat->inserir($categoria, $ativo, $menu);
        header("Location: " . URL_BASE . "categoria");
    }

}
