<?php


class Controller{


public function view($viewName,$viewData = array()){

extract($viewData);

  require 'views/template.php';

}


public function viewInTemplate($viewName,$viewData = array()){

  extract($viewData);

require 'views/'.$viewName.'.php';
 


}

 





















}




























?>