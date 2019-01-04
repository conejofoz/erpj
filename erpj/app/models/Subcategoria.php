<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubCategoria
 *
 * @author conej
 */


namespace app\models;
use app\core\Model;

class SubCategoria extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function getSubCategoria($id){
        $resultado = array();
        $sql = "SELECT * FROM subcategoria s, categoria c WHERE s.id_categoria = c.id_categoria AND id_subcategoria = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
        if($qry->rowCount() > 0){
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }
    
    
    public function lista(){
        $sql = "SELECT * FROM subcategoria s, categoria c WHERE c.id_categoria = s.id_categoria";
        $sql = $this->db->query($sql);
        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }


    public function inserir($id_categoria, $subcategoria, $ativo){
       $sql = "INSERT INTO subcategoria SET"
               . " id_categoria = :id_categoria,"
               . " subcategoria = :subcategoria,"
               . " ativo_subcategoria = :ativo ";
       
       $sql = $this->db->prepare($sql);
       $sql->bindValue(":id_categoria", $id_categoria);
       $sql->bindValue(":subcategoria", $subcategoria);
       $sql->bindValue(":ativo", $ativo);
       $sql->execute();
       $resultado = $this->db->lastInsertId();
       return $resultado;
    }
    
    public function editar($id_categoria, $id_subcategoria, $subcategoria, $ativo){
        $sql = "UPDATE subcategoria SET "
                . "id_categoria = :id_categoria, "
                . "subcategoria = :subcategoria, "
                . "ativo_subcategoria = :ativo "
                . "WHERE id_subcategoria = :id_subcategoria ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $id_categoria);
        $qry->bindValue(":subcategoria", $subcategoria);
        $qry->bindValue(":ativo", $ativo);
        $qry->bindValue(":id_subcategoria", $id_subcategoria);
        $qry->execute();
        $resultado = $qry->rowCount();
        return $resultado;
    }
    
    public function delete($id){
        $sql = "DELETE FROM subcategoria WHERE id_subcategoria = :id_subcategoria";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_subcategoria", $id);
        $qry->execute();
        if($qry->rowCount() > 0){
            return 'ok';
        }
    }
}
