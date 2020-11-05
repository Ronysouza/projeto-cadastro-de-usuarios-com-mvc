   

   <div class="container-home">

   	<table border="1"  >

   	<tr>
   		<th>Nome</th>
   		<th>Rg</th>
   		<th>CPF</th>
   		<th>Endereço</th>
   		<th>Genero</th>
   		<th>Email</th>
   		<th>Ações</th>
   	</tr>       
            <?php foreach($get_nomes as $user):  ?>
                
      <tr>
         <td> <?php echo $user['nome'];  ?></td>
         <td><?php echo $user['rg'];  ?></td>
         <td><?php echo $user['cpf'];  ?></td>
         <td><?php echo $user['endereco'];  ?></td>
         <td><?php echo  strtoupper($user['genero']);  ?></td>
         <td><?php echo $user['email'];  ?></td>
         <td><a href="home/editar/<?php echo $user['id']; ?>" ><img src="assets/imagens/edit2.png"></a><a href="home/delete/<?php echo $user['id'];  ?>"><img src="assets/imagens/delete.png" onClick='return confirm("tem certeza que dejeja deletar este usuário?")' ></a></td>
          
         </tr>
          
         <?php endforeach;  ?>  

   	</table>
   	
         <?php for($q=1;$q<=$paginas;$q++): ?>
             <a href="<?php echo BASE_URL;?>?p=<?php echo $q ?>"><?php echo $q;  ?></a>
         <?php endfor;  ?>
 
   </div>

 