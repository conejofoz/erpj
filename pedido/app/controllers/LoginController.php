<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class LoginController extends Controller {

    public function index() {
        $dados["view"] = "home";
        $dados["erro"] = "";

        $email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL;
        $senha = isset($_POST["txt_senha"]) ? strip_tags(filter_input(INPUT_POST, "txt_senha")) : NULL;

        if (($email) && ($senha)) {
            $login = new Login();
            if ($login->logar($email, $senha)) {
                header("Location: " . URL_BASE);
                exit;
            } else {
                $dados["erro"] = "Email e/ou senha incorretos";
            }
        }

        $this->load("v_login", $dados);
    }
    
    
    public function logoff(){
        unset($_SESSION['clienteLogado']);
        header("Location: " . URL_BASE . "login");
    }

}
