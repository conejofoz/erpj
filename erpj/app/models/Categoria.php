<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author conej
 */


namespace app\models;
use app\core\Model;

class Categoria extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function getCategoria($id){
        $resultado = array();
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
        if($qry->rowCount() > 0){
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }
    
    
    public function lista(){
        $sql = "SELECT * FROM categoria";
        $sql = $this->db->query($sql);
        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }


    public function inserir($categoria, $ativo, $menu){
       $sql = "INSERT INTO categoria SET"
               . " categoria = :categoria,"
               . " ativo_categoria = :ativo,"
               . " mostrar_no_menu = :menu ";
       
       $sql = $this->db->prepare($sql);
       $sql->bindValue(":categoria", $categoria);
       $sql->bindValue(":ativo", $ativo);
       $sql->bindValue(":menu", $menu);
       $sql->execute();
       return $this->db->lastInsertId();
    }
    
    public function editar($id, $categoria, $ativo, $menu){
        $sql = "UPDATE categoria SET "
                . "categoria = :categoria, "
                . "ativo_categoria = :ativo, "
                . "mostrar_no_menu = :menu "
                . "WHERE id_categoria = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":categoria", $categoria);
        $qry->bindValue(":ativo", $ativo);
        $qry->bindValue(":menu", $menu);
        $qry->bindValue("id", $id);
        $qry->execute();
    }
    
    public function delete($id){
        $sql = "DELETE FROM categoria WHERE id_categoria = :id_categoria";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $id);
        $qry->execute();
        if($qry->rowCount() > 0){
            return 'ok';
        }
    }
}
