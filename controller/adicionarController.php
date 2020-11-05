<?php


class adicionarController extends Controller {



 public function index(){


$dados = array(
    
);
   
$pessoa = new Pessoa();






           if(isset($_POST['genero']) && !empty($_POST['genero'])){
                 

                
               $nome = addslashes($_POST['nome']);
               $rg = addslashes($_POST['rg']);
               $cpf = addslashes($_POST['cpf']);
               $endereco = addslashes($_POST['endereco']);
               $genero = addslashes($_POST['genero']);
               $email = addslashes($_POST['email']);
                   
            

                  $pessoa->AddUser($nome,$rg,$cpf,$endereco,$genero,$email);      
                       
                     
                  

               

           } 




    $this->view('adicionar',$dados);

 	 
 }

 













}