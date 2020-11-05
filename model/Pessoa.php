<?php


class Pessoa extends Model{


// public function add(){

//   for($q = 1; $q < 50 ;$q++){

//  $sql ="INSERT INTO pessoa SET nome = 'fulano0$q', rg = 112$q ,cpf = 555$q, endereco = 'rua maria$q', email = '(".$q.")@email.com', genero = 'm'";
   
//  $this->db->query($sql);
    
       

//   }





// }






public function getNome($offsets,$limit){
   
  
  $array = array();
    
  

     $sql = "SELECT * FROM pessoa limit $offsets,$limit ";

     $sql = $this->db->query($sql);

          
           

            $array = $sql->fetchAll();
            
      
          
 
           return $array;
}



public function getUserInId($id_user){



 $array = array();

    $sql = $this->db->query("SELECT * FROM pessoa WHERE id = '$id_user' ");

          
          if($sql->rowCount() > 0){

            $array = $sql->fetch();
        


          }
 

           return $array;






}



public function updateUser($nome,$rg,$cpf,$endereco,$genero,$email,$id){

    
       $sql = $this->db->query("UPDATE pessoa SET nome = '$nome', rg = '$rg', cpf = '$cpf', endereco = '$endereco', genero = '$genero' , email = '$email' WHERE id = $id");

       return true;




}


public function AddUser($nome,$rg,$cpf,$endereco,$genero,$email){
             

      $sql = $this->db->query("SELECT * FROM pessoa WHERE email = '$email' ");

          
          if($sql->rowCount() > 0){        
                  echo "dentro do rowCount";
               echo '<script>alert("já existe um usuário com esse email no sistema !")</script>';
          }else{
            
             
          $sql = "INSERT INTO pessoa SET nome = '$nome', rg = $rg ,cpf = $cpf, endereco = '$endereco', email = '$email', genero = 'm'";
             

           $sql = $this->db->query($sql);

          }     








       return true;







}


public function totalIte(){

  $array = array();

    $sql = $this->db->query("SELECT * FROM pessoa");

          
          if($sql->rowCount() > 0){

            $array = $sql->fetchAll();
        


          }
 
           return $array;


}




public function deleteUser($id){

    



 $sql = $this->db->query("DELETE FROM pessoa WHERE id = '$id'");


 return true;
}



}














?>