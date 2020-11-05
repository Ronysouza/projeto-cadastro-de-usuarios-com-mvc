<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/estilo.css">


	<title>Cadastro</title>

</head>
<body>
 <div class="div-menu">
    <ul>
    <a href="<?php echo BASE_URL ?>"><li><img src="<?php echo BASE_URL ?>assets/imagens/logorbarra.png"></li> </a> 
    <a class="a" href="<?php echo BASE_URL ?>home"><li>Inicio</li></an>
    <a class="a" href="<?php echo BASE_URL ?>adicionar"><li>Adicionar</li></a>

    </ul>
 

  </div>

 


<div><?php $this->viewInTemplate($viewName,$viewData);  ?>  </div>






 

 

</body>
</html>