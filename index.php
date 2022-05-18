<?php

require_once 'class_pssoa.php';
$p = new Pessoa("crudpod","localhost","root",""); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet"  href="estilo.css"> 
</head>
<body>
  <?php
                       if (isset($_POST['nome'])) {
                         $nome = addslashes($_POST['nome']);
                         $telefone= addslashes($_POST['telefone']);
                         $email= addslashes($_POST['email']);
                         if (!empty($nome) && !empty($telefone) && !empty($email)) {
                          if(!$p ->  cadastrarPessoa($nome, $telefone, $email)){


                               
                          
                          }
                          else
                          {
                               echo "email ja existe";
                          }
                         }
                         else {
                                echo "preencha os campos ";

                         }
                       }
  ?>
  
  <section id="esquerda">
  	<form method="POST">
  		
  		<h2>Cadastrar Pessoas </h2>
  		<label for="nome">Nome:</label>
  		<input type="text" name="nome" id="nome">
  		<label for="telefone">Telefone:</label>
  		<input type="text" name="telefone" id="telefone"> 
  		<label for="email">Email:</label>
  		<input type="text" name="email" id="email">
  		<input type="submit" value="Cadastrar">

  	</form>



  </section>
  <section id="direita">

    <table>
      <tr id="titulo">
        <td>Nome</td>
        <td>Telefone</td>
        <td colspan="2">Email</td>
      </tr>
  	<?php
              $dados=$p->buscarDados();
             if (count($dados)>0) {
             for ($i=0; $i < count($dados); $i++){ 

              echo "<tr>";
               foreach ($dados[$i] as $k=> $v) {
                 if ($k!="id") 
                 { 
                  echo "<td>".$v."</td>";
                   
                 }
               }
                ?><td><a href=""> Editar</a> <a href="">Excluir</a></td><?php
               echo "</tr>";
             }
            
             
             }
              
            
      ?>
  	
  		
  		
  	</table>
  </section>


</body>
</html>
