<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Produto;
use app\models\Categoria;
use app\models\Subcategoria;

class ProdutoController extends Controller {

    public function index() {
        $produto = new Produto();

        $dados["produtos"] = $produto->lista();
        $dados["view"] = "Produto/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $categoria = new Categoria();
        $subcategoria = new Subcategoria();

        $dados["categorias"] = $categoria->lista();
        $dados["subcategorias"] = $subcategoria->lista();
        $dados["view"] = "Produto/Create";
        $this->load("template", $dados);
    }

    public function edit($id = 0) {
        $produto = new Produto();
        if ($id == 0) {
            header("Location:" . URL_BASE . "produto");
        }

        $achou = $produto->getProduto($id);

        if (!$achou) {
            header("Location: " . URL_BASE . "produto");
        }

        $dados["produto"] = $achou;
        $dados["view"] = "Produto/Edit";
        $this->load("template", $dados);
    }

    public function salvar() {
        $produto = new Produto();

        $id_produto = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : NULL;

        if($_POST["txt_produto"] == ""){
            echo 'Produto vazio!';
            exit;
        }
        $valores = (Object)array(
            "id_produto"   => $id_produto,
            "id_categoria" => strip_tags(filter_input(INPUT_POST, "txt_id_categoria")),
            "id_subcategoria" => strip_tags(filter_input(INPUT_POST, "txt_id_subcategoria")),
            "produto" => strip_tags(filter_input(INPUT_POST, "txt_produto")),
            "unidade" => strip_tags(filter_input(INPUT_POST, "txt_unidade")),
            "preco_alto" => strip_tags(filter_input(INPUT_POST, "txt_preco_alto")),
            "preco" => strip_tags(filter_input(INPUT_POST, "txt_preco")),
            "eh_lancamento" => strip_tags(filter_input(INPUT_POST, "txt_eh_lancamento")),
            "eh_promocao" => strip_tags(filter_input(INPUT_POST, "txt_eh_promocao")),
            "eh_maisvendido" => strip_tags(filter_input(INPUT_POST, "txt_eh_maisvendido")),
            "ativo" => strip_tags(filter_input(INPUT_POST, "txt_ativo")),
            "descricao" => strip_tags(filter_input(INPUT_POST, "txt_descricao")),
            "peso_correio" => strip_tags(filter_input(INPUT_POST, "txt_peso_correio")),
            "diametro_correio" => strip_tags(filter_input(INPUT_POST, "txt_diametro_correio")),
            "comprimento_correio" => strip_tags(filter_input(INPUT_POST, "txt_comprimento_correio")),
            "largura_correio" => strip_tags(filter_input(INPUT_POST, "txt_largura_correio")),
            "altura_correio" => strip_tags(filter_input(INPUT_POST, "txt_altura_correio")),
        );
        
        

        if ($id_produto) {
            $salvo = $produto->editar($valores);
        } else {
            $salvo = $produto->inserir($valores);
        }
        header("Location: " . URL_BASE . "produto");
    }

    public function excluir($id = 0) {
        $produto = new Produto();

        if ($id == 0) {
            header("Location: " . URL_BASE . "produto");
        }

        $umaProduto = $produto->getProduto($id);

        if (!$umaProduto) {
            header("Location: " . URL_BASE . "produto");
        }

        $dados["produto"] = $umaProduto;
        $dados["view"] = "Produto/Delete";
        $this->load("template", $dados);









        //$id_produto = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : NULL;
    }

    public function delete($id) {
        $produto = new Produto();
        $retorno = $produto->delete($id);
        if ($retorno == "ok") {

            echo '<script>alert("Registro Eliminado")</script>';
            //echo "bababa";
            //exit();
            // echo 'Registro apagado';
            //sleep(5);

            header("Location:" . URL_BASE . "produto");
        }
    }

}
