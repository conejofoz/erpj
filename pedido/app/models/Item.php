<?php

namespace app\models;
use app\core\Model;

class Item extends Model{
    
    public function pesquisaPorNome($nome){
        //$sql = "SELECT " .utf8_encode("produto")." FROM produto WHERE produto like :nome";
        $sql = "SELECT * FROM produto WHERE produto like :nome";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", "%" . $nome . "%");
        $sql->execute();
        $resultado = $sql->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }
}