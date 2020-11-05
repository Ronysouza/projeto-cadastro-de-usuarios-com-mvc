<?php


class galeriaController extends Controller {



 public function index(){


$dados = array(
    'nome'=>'galeria do site',
    'idade'=>30
);




    $this->view('galeria',$dados);

 	 
 }

 













}