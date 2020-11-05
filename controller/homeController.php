<?php


class homeController extends Controller {



 public function index(){


$dados = array(
    'nome'=>'roney',
    'idade'=>30
);
  
  $p = new Pessoa();
  $p->getNome();



    $this->view('home',$dados);

 	 
 }

 













}