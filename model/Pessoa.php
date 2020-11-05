<?php


class Pessoa extends Model{


public function getNome(){

  $array = array();

    $sql = $this->db->query("SELECT * FROM pessoa ");

          
          if($sql->rowCount() > 0){

            $array = $sql->fetchAll();
        


          }
 
            print_r($array);







}
 



















}














?>