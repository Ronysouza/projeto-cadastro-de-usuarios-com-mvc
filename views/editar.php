

  <div class="container-adicionar">

<center> <h1>Editar usuário</h1></center>

<form method="POST">
Nome:<br><br>
<input type="hidden" name="id" value="<?php echo $user_edit['id'];  ?>" >
<input class="input" type="text" name="nome" placeholder="nome" value="<?php echo $user_edit['nome'];  ?>" ><br><br>
RG:<br><br>
<input class="input" type="text" name="rg" placeholder="rg" value="<?php echo $user_edit['rg'];  ?>"><br><br>
CPF:<br><br>
<input class="input" type="text" name="cpf" placeholder="cpf" value="<?php echo $user_edit['cpf'];  ?>"><br><br>
Endereço:<br><br>
<input class="input" type="text" name="endereco" placeholder="enredeço" value="<?php echo $user_edit['endereco'];  ?>"><br><br>
Genero:<br> 
 
 <select name="genero">    
 	<option  value="m" <?php if($user_edit['genero'] == 'm'):?> selected <?php endif; ?>  >M</option>
 	<option value="f" <?php if($user_edit['genero'] == 'f'):?> selected <?php endif; ?>  >F</option>
 </select><br><br>
 
Email:<br><br>
<input class="input" type="text" name="email" placeholder="email" value="<?php echo $user_edit['email'];  ?>"><br><br>

 <input type="submit" value="Salvar"> 

 




	

</form>




	
</div> 