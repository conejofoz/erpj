<?php

namespace app\models;
use app\core\Model;


class Login extends Model{
    
    public function logar($email, $senha){
        $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        if($sql->rowCount() > 0){
            $_SESSION["clienteLogado"] = $sql->fetch(\PDO::FETCH_OBJ);
            return true;
        } else {
            unset($_SESSION["clienteLogado"]);
            return false;
        }
    }
    
    public function estaLogado(){
        if(isset($_SESSION["clienteLogado"])){
            return true;
        }
        return false;
    }
    
}
