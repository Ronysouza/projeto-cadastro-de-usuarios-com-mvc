<?php
require 'environmment.php';

	global $db;

try{

    if(ENVIRONMMENT == 'development'){
          
          define('BASE_URL','http://localhost/cadastro/');
               
               $db_name = 'mysql:dbname=teste_mvc;host=localhost';              
               $db_user = 'root';
               $db_pass = '';         
 

           //echo "ambiente de desenvolvimento";
    }else{

          define('BASE_URL','http://localhost/estrutura-mvc/');

               $db_name = 'mysql:dbname=teste_mvc;host=localhost';               
               $db_user = 'root';
               $db_pass = ''; 


        //echo "ambiente de producao";
        



    }    
     
     
     $db = new PDO($db_name,$db_user,$db_pass);  






}catch(PDOException $e){

  echo 'ERROR na conexao com banco de dados'.$e->getMessage();







}


 









?>