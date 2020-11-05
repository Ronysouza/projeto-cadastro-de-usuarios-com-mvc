<?php


class homeController extends Controller {



 public function index(){


$dados = array(

	'get_nomes'=>array()
    
);
  
  $p = new Pessoa();


	      $ofsets = 0;
	      $limit= 13;
	      
	      $total = count($p->totalIte()); 


	      $dados['paginas'] = ceil($total/$limit); 
          $dados['pagina_atual'] = 1;
                
                
                if(!empty($_GET['p'])){

                	$dados['pagina_atual'] = intval($_GET['p']);
                       

                } 
                 $ofsets = ($dados['pagina_atual'] * $limit) - $limit;



            
          $dados['get_nomes'] = $p->getNome($ofsets,$limit);     
            
           $this->view('home',$dados);

 	 
 }


 public function editar($id){

$dados = array(
	'user_edit'=>array()
    
);

     $pessoa = new Pessoa();
     $dados['user_edit'] = $pessoa->getUserInId($id);

           
           if(isset($_POST['nome']) && !empty($_POST['nome'])){
               
               $id = addslashes($_POST['id']);
               $nome = addslashes($_POST['nome']);
               $rg = addslashes($_POST['rg']);
               $cpf = addslashes($_POST['cpf']);
               $endereco = addslashes($_POST['endereco']);
               $genero = addslashes($_POST['genero']);
               $email = addslashes($_POST['email']);
                  

                 if($pessoa->updateUser($nome,$rg,$cpf,$endereco,$genero,$email,$id)){
                 
                       
                     header('location:'.BASE_URL);
                        
                 }

               

           } 








    $this->view('editar',$dados);



 	
 }

 



 public function delete($id){


   
  
  $p = new Pessoa();

      if($p->deleteUser($id)){

      	header('Location:'.BASE_URL);



      }

     



      







    $this->view('home',$dados);

 	 
 }

























}