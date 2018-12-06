<?php
namespace app\controllers;
use app\core\controller;

class HomeController extends Controller{
    
   public function index(){
       $dados["view"] = "home";
       $this->load("template", $dados);
   } 
}
