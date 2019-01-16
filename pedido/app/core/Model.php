<?php

namespace app\core;

abstract class Model{
    protected $db;
    
    public function __construct() {
        $opcoes = array(
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::MYSQL_ATTR_INIT_COMMAND =>"Set NAMES utf8"
        );
        $this->db = new \PDO("mysql:dbname=".BANCO.";host=".SERVIDOR,USUARIO,SENHA, $opcoes);
        //BURRO ACHAVA QUE O PDO NÃO FUNCIONAVA... TINHA PREPARADO O ARRAY DE OPÇOES E NÃO TINHA COLOCADO NA CONEXAO
        
        //$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}

